<?php
/**
 * @file
 * common_nodequeues.features.inc
 */

/**
 * Implements hook_views_api().
 */
function common_nodequeues_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_fe_nodequeue_export_fields().
 */
function common_nodequeues_fe_nodequeue_export_fields() {
  $nodequeues = array();

  // Exported nodequeues: articles
  $nodequeues['articles'] = array(
    'name' => 'articles',
    'title' => 'Articles',
    'subqueue_title' => '',
    'size' => '6',
    'link' => 'Add article to queue',
    'link_remove' => 'Remove article from queue',
    'owner' => 'nodequeue',
    'show_in_ui' => '1',
    'show_in_tab' => '1',
    'show_in_links' => '1',
    'reference' => '0',
    'reverse' => '1',
    'i18n' => '0',
    'types' => array(
      0 => 'article',
    ),
    'roles' => array(),
    'count' => 0,
  );

  return $nodequeues;
}
