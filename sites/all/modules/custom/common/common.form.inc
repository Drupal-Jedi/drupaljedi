<?php
/**
 * @file
 * Form functional.
 */

/**
 * Implements hook_form_alter().
 */
function common_form_alter(&$form, &$form_state, $form_id) {
  if (preg_match('/^.*node_form$/', $form_id)) {
    $form['actions']['cancel']['#access'] = FALSE;
    $form['actions']['delete']['#access'] = FALSE;
    $form['actions']['preview_changes']['#access'] = FALSE;
    $form['actions']['submit']['#weight'] = 1;

    // Setting display of other control elements.
    $form['actions']['save_and_publish'] = array(
      '#type' => 'submit',
      '#value' => t('Save and publish'),
      '#weight' => 12,
      '#submit' => array(
        'common_save_and_publish_submit',
        'common_add_redirect_for_publish_submit',
      ),
      '#validate' => array('node_form_validate'),
    );

    $form['actions']['submit']['#submit'][] = 'common_remove_redirect_submit';
    $form['actions']['preview'] = array(
      '#type' => 'submit',
      '#value' => t('Preview'),
      '#weight' => 11,
      '#submit' => array('common_preview_redirect'),
      '#validate' => array(
        'node_form_validate',
      ),
    );

    if (!empty($form['#node'])) {
      if ($form['#node']->status) {
        $form['actions']['unpublish'] = array(
          '#type' => 'submit',
          '#value' => t('Unpublish'),
          '#weight' => 12,
          '#submit' => array('common_add_redirect_submit', 'common_unpublish_submit'),
        );
        $form['actions']['save_and_publish']['#access'] = FALSE;
      }
    }
  }

  switch ($form_id) {
    case 'common_site_setting_form':
      $form['#after_build'][] = 'common_settings_form_after_build';
      break;
  }
}

/**
 * After build.
 */
function common_settings_form_after_build(&$form, &$form_state) {
  $form['setting_tabs']['site_info']['site_information']['format']['#access'] = FALSE;
  $form['setting_tabs']['site_contacts']['site_contacts']['format']['#access'] = FALSE;
  return $form;
}

/**
 * Add redirect when entity is saved.
 */
function common_add_redirect_submit($form, &$form_state) {
  unset($_GET['destination']);

  if ($form['#entity_type'] == 'asset') {
    $form_state['redirect'] = 'admin/dashboard/multimedia';
  }
  // Manage redirects.
  switch ($form['form_id']['#value']) {

    case 'article_node_form':
      $form_state['redirect'] = 'admin/dashboard/article';
      break;
  }
}

/**
 * Form submit handler for save_and_publish button.
 */
function common_save_and_publish_submit($form, &$form_state) {
  $form_state['values']['status'] = 1;

  // Set published date if article created.
  if (empty($form_state['values']['nid'])) {
    $form_state['values']['field_published_date'][LANGUAGE_NONE][0]['value'] = time();
  }

  if (isset($form['actions']['submit']['#submit'])) {
    foreach ($form['actions']['submit']['#submit'] as $function) {
      $function($form, $form_state);
    }
  }
}

/**
 * Add redirect when node is save & publish.
 */
function common_add_redirect_for_publish_submit($form, &$form_state) {
  unset($_GET['destination']);
  unset($form_state['redirect']);

  if ($form['#entity_type'] == 'asset') {
    $form_state['redirect'] = 'admin/dashboard/multimedia';
  }
  else {
    // Manage redirects.
    switch ($form['type']['#value']) {
      default:
        if (!empty($form_state['node']->nid)) {
          $form_state['redirect'] = 'node/' . $form_state['node']->nid;
        }
        break;
    }
  }
}

/**
 * Remove redirect when node is saved.
 */
function common_remove_redirect_submit($form, &$form_state) {
  if (!isset($form_state['node'])) {
    return;
  }
  unset($_GET['destination']);
  if (preg_match('/.*asset_.*_form$/', $form['#form_id'])) {
    $form_state['redirect'] = 'admin/content/assets/manage/' . $form_state['asset']->aid;
  }
  elseif (!in_array('common_add_redirect_submit', $form_state['clicked_button']['#submit'])) {
    $form_state['redirect'] = 'node/' . $form_state['node']->nid . '/edit';
  }
  elseif (!user_access('administer content')) {
    $form_state['redirect'] = 'node/' . $form_state['node']->nid . '/edit';
  }
}

/**
 * Form submit handler for unpublish button.
 */
function common_unpublish_submit($form, &$form_state) {
  $form_state['values']['status'] = 0;
  switch ($form['#entity_type']) {

    case 'asset':
      if (isset($form['#submit'])) {
        foreach ($form['#submit'] as $function) {
          $function($form, $form_state);
        }
      }
      break;

    default:
      if (isset($form['actions']['submit']['#submit'])) {
        foreach ($form['actions']['submit']['#submit'] as $function) {
          $function($form, $form_state);
        }
      }
      break;
  }
}

/**
 * This functional provide preview redirect.
 */
function common_preview_redirect($form, &$form_state) {
  unset($_GET['destination']);

  // Manage redirect.
  if (!empty($form_state['node']->nid)) {
    $node = $form_state['node'];
    $form_state['redirect'] = 'node/' . $node->nid;
  }
}

/**
 * Delete confirm form submit handler.
 */
function common_additions_taxonomy_term_confirm_delete_submit($form, &$form_state) {
  taxonomy_term_delete($form_state['values']['tid']);
  $vocabulary = taxonomy_vocabulary_load($form['#term']->vid);
  taxonomy_check_vocabulary_hierarchy($vocabulary, $form_state['values']);
  drupal_set_message(t('Deleted term %name.', array('%name' => $form_state['values']['name'])));
  watchdog('taxonomy', 'Deleted term %name.', array('%name' => $form_state['values']['name']), WATCHDOG_NOTICE);
  $form_state['redirect'] = 'admin/dashboard/tags';
  cache_clear_all();
  return;
}

/**
 * Custom Delete term confirm form.
 */
function common_additions_taxonomy_term_confirm_delete($form, &$form_state, $tid) {
  $term = taxonomy_term_load($tid);

  // Always provide entity id in the same form key as in the entity edit form.
  $form['tid'] = array('#type' => 'value', '#value' => $tid);

  $form['#term'] = $term;
  $form['type'] = array('#type' => 'value', '#value' => 'term');
  $form['name'] = array('#type' => 'value', '#value' => $term->name);
  $form['vocabulary_machine_name'] = array('#type' => 'value', '#value' => $term->vocabulary_machine_name);
  $form['delete'] = array('#type' => 'value', '#value' => TRUE);
  return confirm_form($form,
    t('Are you sure you want to delete the term %title?',
      array('%title' => $term->name)),
    'admin/dashboard/tags',
    t('Deleting a term will delete all its children if there are any. This action cannot be undone.'),
    t('Delete'),
    t('Cancel'));
}
