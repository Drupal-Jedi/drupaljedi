<?php
/**
 * @file
 * Ctools CT plugin for render buttons on taxonomy dashboard.
 */

$plugin = array(
  'single' => TRUE,
  'title' => t('Buttons for taxonomy dashboard.'),
  'description' => t('Buttons for add terms into taxonomy vocabularies.'),
  'category' => t('Common site'),
  'hook theme' => 'common_taxonomy_dashboard_buttons_theme',
);

/**
 * Render the custom content type.
 */
function common_taxonomy_dashboard_buttons_content_type_render($subtype, $conf, $panel_args, $context) {
  if ($vocabularies = taxonomy_get_vocabularies()) {
    $links = '';

    foreach ($vocabularies as $voc) {
      if (strpos(request_uri(), 'admin/dashboard/category') !== FALSE && $voc->machine_name !== 'category') {
        continue;
      }

      $title = t(
        'Create @name',
        array('@name' => drupal_strtolower($voc->name))
      );
      $links .= l(
        $title,
        "admin/structure/taxonomy/$voc->machine_name/add",
        array(
          'attributes' => array(
            'title' => $title,
            'class' => 'common-add-node',
          ),
        )
      );
    }
  }

  $block = new stdClass();
  $block->content = theme('common_taxonomy_dashboard_buttons', array('links' => $links));
  return $block;
}

/**
 * Implements of hook_theme().
 */
function common_taxonomy_dashboard_buttons_theme(&$theme, $plugin) {
  $theme['common_taxonomy_dashboard_buttons'] = array(
    'variables' => array(
      'links' => NULL,
    ),
    'path'      => $plugin['path'],
    'template'  => 'taxonomy-dashboard-buttons',
  );
}
