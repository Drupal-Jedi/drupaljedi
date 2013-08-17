<?php
/**
 * @file
 * Main theme logic
 */

/**
 * Preprocess for asset image field.
 */
function common_admin_preprocess_views_view_field__field_asset_image(&$vars, $aid) {
  $output = trim($vars['output']);
  if (!empty($output)) {
    $vars['output'] = '<span class="asset-tooltip" rel="assets/tooltip/' . $aid
      . '/tooltip ">' . $vars['output'] . '</span>';
  }
}

/**
 * Preprocess for asset video field.
 */
function common_admin_preprocess_views_view_field__field_asset_video(&$vars, $aid) {
  $output = trim($vars['output']);
  if (!empty($output)) {
    $vars['output'] = '<span class="asset-tooltip" rel="assets/tooltip/' . $aid
      . '/tooltip ">' . $vars['output'] . '</span>';
  }
}

/**
 * Default preprocess for views-view-field.
 */
function common_admin_preprocess_views_view_field(&$vars) {
  if ($vars['field']->field == 'field_asset_video') {
    if (!empty($vars['row']->aid)) {
      $aid = $vars['row']->aid;
      common_admin_preprocess_views_view_field__field_asset_video($vars, $aid);
    }
  }
  elseif ($vars['field']->field == 'field_asset_image') {
    if (!empty($vars['row']->aid)) {
      $aid = $vars['row']->aid;
      common_admin_preprocess_views_view_field__field_asset_image($vars, $aid);
    }
    elseif (!empty($vars['row']->asset_field_data_field_article_media_aid)) {
      $aid = $vars['row']->asset_field_data_field_article_media_aid;
      common_admin_preprocess_views_view_field__field_asset_image($vars, $aid);
    }
  }
}

/**
 * Implements hook_preprocess_html().
 */
function common_admin_preprocess_html(&$vars) {
  unset($vars['page']['page_top']);
}

/**
 * Implements hook_preprocess_page().
 */
function common_admin_preprocess_page(&$vars) {
  global $user;
  $account = user_load($user->uid);
  $real_name = field_get_items('user', $account, 'field_user_name');
  $name = $real_name ? $real_name[0]['value'] : $account->name;
  $user_role = array_keys($user->roles);
  $user_role = reset($user_role);
  $user_perms = user_role_permissions($user->roles);
  foreach ($user_perms as $rid => $perms) {
    if (count($perms) > count($user_perms[$user_role])) {
      $user_role = $rid;
    }
  }
  $role_name = isset($user->roles[$user_role]) ? '(' . ucfirst($user->roles[$user_role]) . ')' : '';
  $vars['secondary_menu'] = array(
    'account' => array(
      'title' => t('Bonjour @name @role', array('@name' => $name, '@role' => $role_name)),
    ),
    'logout' => array(
      'href' => 'user/logout',
      'title' => t('Log out'),
    ),
  );
  $vars['user_name'] = $name;
  if (!user_access('administer site configuration') && in_array('page__admin__structure__taxonomy__tags', $vars['theme_hook_suggestions'], TRUE)) {
    $vars['primary_local_tasks'] = '';
  }

  if (function_exists('menu_block_get_config')) {
    $delta = theme_get_setting('common_admin_menu_level_1');
    if ($delta != 'none') {
      $config = menu_block_get_config($delta);
      $admin_level_1 = menu_tree_build($config);
      unset($admin_level_1['subject_array']);
      unset($admin_level_1['subject']);
      $vars['common_admin_menu_level_1'] = drupal_render($admin_level_1);
    }

    $delta = theme_get_setting('common_admin_menu_level_2');
    if ($delta != 'none' && strpos($_GET['q'], 'admin/structure/nodequeue') !== FALSE) {
      $config = menu_block_get_config($delta);
      $admin_level_2 = menu_tree_build($config);
      unset($admin_level_2['subject_array']);
      unset($admin_level_2['subject']);
      $vars['common_admin_menu_level_2'] = drupal_render($admin_level_2);
    }
  }

  $slogan_text = $vars['site_slogan'];
  $site_name_text = variable_get('site_name', '');
  $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
  _rubik_local_tasks($vars);
}

/**
 * Theming function for le admin menu.
 */
function common_admin_menu_tree__menu_common_admin_menu($vars) {
  return '<ul class="primary-tabs links clearfix">' . $vars['tree'] . '</ul>';
}

/**
 * Returns HTML for a wrapper for a menu sub-tree.
 */
function common_admin_menu_tree($variables) {
  return '<ul class="menu">' . $variables['tree'] . '</ul>';
}


/**
 * Returns HTML for an individual form element.
 */
function common_admin_field_multiple_value_form($variables) {
  $element = $variables['element'];
  $output = '';

  if ($element['#cardinality'] > 1 || $element['#cardinality'] == FIELD_CARDINALITY_UNLIMITED) {
    $table_id = drupal_html_id($element['#field_name'] . '_values');
    $order_class = $element['#field_name'] . '-delta-order';
    $required = !empty($element['#required']) ? theme('form_required_marker', $variables) : '';

    $suffix = stristr($element['#id'], 'edit-field-asset-diaporama')
      ? '<span class="form-required"> *</span></label>' : '</label>';
    $header = array(
      array(
        'data' => '<label>' . t('!title : !required', array(
            '!title' => $element['#title'],
            '!required' => $required
          )
        ) . $suffix,
        'colspan' => 2,
        'class' => array('field-label'),
      ),
      t('Order'),
    );
    $rows = array();

    $items = array();
    foreach (element_children($element) as $key) {
      if ($key === 'add_more') {
        $add_more_button = & $element[$key];
      }
      else {
        $items[] = & $element[$key];
      }
    }
    usort($items, '_field_sort_items_value_helper');

    // Add the items as table rows.
    foreach ($items as $key => $item) {
      $item['_weight']['#attributes']['class'] = array($order_class);
      $delta_element = drupal_render($item['_weight']);
      $cells = array(
        array('data' => '', 'class' => array('field-multiple-drag')),
        drupal_render($item),
        array('data' => $delta_element, 'class' => array('delta-order')),
      );
      $rows[] = array(
        'data' => $cells,
        'class' => array('draggable'),
      );
    }

    $output = '<div class="form-item">';
    $output .= theme(
      'table',
      array(
        'header' => $header,
        'rows' => $rows,
        'attributes' => array(
          'id' => $table_id,
          'class' => array('field-multiple-table'),
        ),
      )
    );
    $output .= $element['#description'] ? '<div class="description">' . $element['#description'] . '</div>' : '';
    $output .= '<div class="clearfix">' . drupal_render($add_more_button) . '</div>';
    $output .= '</div>';

    drupal_add_tabledrag($table_id, 'order', 'sibling', $order_class);
  }
  else {
    foreach (element_children($element) as $key) {
      $output .= drupal_render($element[$key]);
    }
  }

  return $output;
}

/**
 * Implements hook_theme_registry_alter().
 */
function common_admin_theme_registry_alter(&$registry) {
  $registry['taxonomy_form_term']['preprocess functions'][] = 'common_admin_preprocess_default_form';
  $registry['taxonomy_form_term']['path'] = drupal_get_path('theme', 'common_admin') . '/templates';
  $registry['taxonomy_form_vocabulary']['preprocess functions'][] = 'common_admin_preprocess_default_form';
  $registry['taxonomy_form_vocabulary']['path'] = drupal_get_path('theme', 'common_admin') . '/templates';
  $registry['user_profile_form']['preprocess functions'][] = 'common_admin_preprocess_default_form';
  $registry['node_form']['preprocess functions'][] = 'common_admin_preprocess_default_form';
}

/**
 * Preprocess variables for form-default.tpl.php.
 * @see form-default.tpl.php
 */
function common_admin_preprocess_default_form(&$vars) {
  if (!empty($vars['form']['actions'])) {
    $vars['sidebar_actions'] = $vars['form']['actions'];
    $vars['sidebar_actions']['#id'] = $vars['form']['actions']['#id'] . '-1';
  }
  elseif (!empty($vars['actions'])) {
    $vars['sidebar_actions'] = $vars['actions'];
    $vars['sidebar_actions']['#id'] = $vars['actions']['#id'] . '-1';
  }
  if (!empty($vars['sidebar']['actions'])) {
    unset($vars['sidebar']['actions']);
  }
}

/**
 * Theme function for imagefield_crop_widget.
 */
function common_admin_imagefield_crop_widget($variables) {
  $element = $variables['element'];
  $output = '';

  $output .= '<div class="imagefield-crop-widget form-managed-file clearfix">';

  if (isset($element['preview'])) {
    $element['preview']['#prefix'] = '<div class="image-preview-label">' . t("Image preview") . '</div><div class="imagefield-crop-preview">';
    $element['preview']['#suffix'] = '</div><div class="cropbox-description"><span>'
      . t("Choose zone to crop image.")
      . '</span></div>';
  }
  $output .= drupal_render_children($element);

  if (isset($element['cropbox'])) {
    $output .= '<div class="imagefield-crop-cropbox">';
    $output .= drupal_render($element['cropbox']);
    $output .= '</div>';
  }
  $output .= '</div>';

  return $output;
}

/**
 * Theme the subqueue overview as a sortable list.
 */
function common_admin_nodequeue_arrange_subqueue_form_table($variables) {
  $form = $variables['form'];
  $output = '';

  // Get css to hide some of the help text if javascript is disabled.
  drupal_add_css(drupal_get_path('module', 'nodequeue') . '/nodequeue.css');

  $table_id = 'nodequeue-dragdrop-' . $form['#subqueue']['sqid'];
  $table_classes = array(
    'nodequeue-dragdrop',
    'nodequeue-dragdrop-qid-' . $form['#subqueue']['qid'],
    'nodequeue-dragdrop-sqid-' . $form['#subqueue']['sqid'],
    'nodequeue-dragdrop-reference-' . $form['#subqueue']['reference'],
  );
  drupal_add_tabledrag($table_id, 'order', 'sibling', 'node-position');
  drupal_add_js(drupal_get_path('module', 'nodequeue') . '/nodequeue_dragdrop.js');

  $reverse[str_replace('-', '_', $table_id)] = (bool) $form['#queue']['reverse'];
  drupal_add_js(
    array(
      'nodequeue' => array(
        'reverse' => $reverse,
      ),
    ),
    array(
      'type' => 'setting',
      'scope' => JS_DEFAULT,
    )
  );

  // Render form as table rows.
  $rows = array();
  $counter = 1;
  $qid = $form['#queue']['qid'];
  $dest = 'admin/structure/nodequeue/' . $qid . '/view/' . $qid;
  $queue_name = $form['#queue']['name'];

  foreach (element_children($form) as $key) {
    if (isset($form[$key]['title'])) {
      $row = array();
      $node = $form[$key]['#node'];
      $node_object = node_load($node['nid']);
      // Get asset id from article.
      if (!empty($node_object->field_article_media)) {
        $aid = field_get_items('node', $node_object, 'field_article_media');
      }
      // Get asset id from dossier.
      elseif (!empty($node_object->field_folder_illustration)) {
        $aid = field_get_items('node', $node_object, 'field_folder_illustration');
      }

      // Load asset by aid.
      if (!empty($aid)) {
        $aid = $aid[0]['target_id'];

        $asset = asset_load($aid);
        if (!empty($asset)) {
          $asset = entity_view('asset', array($asset), 'dashboard_article_thumbnail');
        }
        else {
          $asset = NULL;
        }
      }

      $row[] = (!empty($asset)) ? render($asset) : '';
      $row[] = array(
        'data' => drupal_render($form[$key]['title']),
        'class' => array('title-td'),
      );
      $row[] = drupal_render($form[$key]['author']);
      $row[] = drupal_render($form[$key]['date']);
      $row[] = drupal_render($form[$key]['position']);
      if (!empty($queue_name) && $queue_name != 'five_links_per_day') {
        $row[] = l(
          ($node['status'] == 1) ? t('depublier') : t('publier'),
          'node/' . $node['nid'] . (($node['status'] == 1) ? '/unpublish' : '/publish'),
          array(
            'query' => array('destination' => $dest),
          )
        );
      }
      $row[] = (!empty($form[$key]['edit'])) ? drupal_render($form[$key]['edit']) : '&nbsp;';
      $row[] = drupal_render($form[$key]['remove']);
      $row[] = array(
        'data' => $counter,
        'class' => array('position'),
      );

      $rows[] = array(
        'data' => $row,
        'class' => array('draggable'),
      );
    }

    $counter++;
  }
  if (empty($rows)) {
    $rows[] = array(array('data' => t('No nodes in this queue.'), 'colspan' => 7));
  }

  // Render the main nodequeue table.
  if (!empty($queue_name) && $queue_name != 'five_links_per_day') {
    $header = array(
      !empty($asset) ? '<span class = "vignete-header">' . t('Vignette') . '</span>' : '',
      t('Title'),
      t('Author'),
      t('Post Date'),
      array('data' => t('Position'), 'class' => 'hidden-position-th'),
      t('Unpublish'),
      array('data' => t('Operations'), 'colspan' => 2),
      t('Position'),
    );
  }
  else {
    $header = array(
      !empty($asset) ? '<span class = "vignete-header">' . t('Vignette') . '</span>' : '',
      t('Title'),
      t('Author'),
      t('Post Date'),
      array('data' => t('Position'), 'class' => 'hidden-position-th'),
      array('data' => t('Operations'), 'colspan' => 2),
      t('Position'),
    );
  }
  $output .= theme('table', array(
    'header' => $header,
    'rows' => $rows,
    'attributes' => array('id' => $table_id, 'class' => $table_classes),
  ));

  return $output;
}

/**
 * Override or insert variables into the user profile template.
 */
function common_admin_preprocess_user_profile(&$vars) {
  if (!empty($vars['elements']['#view_mode'])) {
    $vars['theme_hook_suggestions'][] = 'user_profile__' . $vars['elements']['#view_mode'];
  }
}

/**
 * Preprocess variables for any entity.
 */
function common_admin_preprocess_asset__gallery(&$vars) {
  if (FALSE && in_array($vars['view_mode'], array('tooltip'))
    && !empty($vars['content']['field_asset_gallery_images']['#items'])) {
    foreach ($vars['content']['field_asset_gallery_images']['#items'] as $item) {
      if ($item['entity']->type == 'image') {
        $style_name = 'gallery_tooltip';
        $img_asset = $item['entity'];
        $image_items = field_get_items('asset', $img_asset, 'field_asset_image');
        $field_copyright = field_get_items('asset', $img_asset, 'field_asset_image_copyright');
        $field_copyright = (!empty($field_copyright[0]['safe_value']))
          ? $field_copyright[0]['safe_value'] : '';
        $field_description = field_get_items('asset', $img_asset, 'field_asset_description');
        $field_description = (!empty($field_description[0]['safe_value']))
          ? $field_description[0]['safe_value'] : '';
        $image = reset($image_items);
        $thumbnail_style_name = 'gallery_thumbnail';
        $image_array = array(
          'path' => $image['uri'],
          'alt' => $item['entity']->title,
          'attributes' => array(
            'longdesc' => (!empty($field_copyright)) ? $field_copyright : '',
          ),
          'style_name' => $thumbnail_style_name,
        );
        $thumbnail = theme('image_style', $image_array);
        $image_array['style_name'] = $style_name;
        $image_content = theme('image_style', $image_array);
        $vars['slider_items'][] = array(
          'thumbnail' => $thumbnail,
          'media' => $image_content,
          'description' => !empty($field_description) ? $field_description : '',
          'copyright' => ($vars['view_mode'] == 'full')
            ? $field_copyright : '',
          'title' => ($vars['view_mode'] == 'full')
            ? $field_description : check_plain($img_asset->title),
        );
      }
      elseif ($item['entity']->type == 'video') {
        $video_asset = entity_load('asset', array($item['target_id']));
        $style_name = 'gallery_tooltip';
        $renderable_video_field = entity_view('asset', array(reset($video_asset)), $style_name);
        $title = check_plain($renderable_video_field['asset'][$item['target_id']]['#entity']->title);
        $description = render($renderable_video_field['asset'][$item['target_id']]['field_asset_description']);
        $content = render($renderable_video_field['asset'][$item['target_id']]['field_asset_video']);
        $thumbnail_style_name = 'gallery_thumbnail';
        $image_array = array(
          'alt' => $description,
          'style_name' => $thumbnail_style_name,
        );

        if (!empty($item['entity']->field_asset_video[LANGUAGE_NONE][0]['snapshot'])) {
          $file_path = $item['entity']->field_asset_video[LANGUAGE_NONE][0]['snapshot'];
          $image_array['path'] = $file_path;

          $thumbnail = theme('imagecache_external', $image_array);
          if (empty($thumbnail)) {
            $thumbnail = theme('image_style', $image_array);
          }
        }
        else {
          $file_path = CULTUREBOX_THEME_PATH . '/images/no_video.jpg';
          $thumbnail = theme('image', array(
            'path' => $file_path,
          ));
        }
        $vars['slider_items'][] = array(
          'thumbnail' => $thumbnail,
          'media' => $content,
          'description' => (!empty($description)) ? $description : '',
          'title' => $title,
        );
      }
    }
  }
}

/**
 * Preprocess variables for any entity.
 */
function common_admin_preprocess_entity(&$vars, $hook) {
  if ('asset' === $vars['elements']['#entity_type']) {

    // Call preprocess functions.
    foreach ($vars['theme_hook_suggestions'] as $item) {
      $function = 'common_admin_preprocess_' . $item;
      if (function_exists($function)) {
        $function($vars);
      }
    }
  }
}