<?php
/**
 * @file
 * Views module integration hooks.
 */

/**
 * Implements hook_views_data().
 */
function common_views_data() {

  $data = array();
  $data['views_entity_node']['unpublish_node'] = array(
    'field' => array(
      'title' => t('Unpublish link'),
      'help' => t('Provide a simple link to unpublish the content.'),
      'handler' => 'common_views_handler_field_node_link_unpublish',
    ),
  );
  $data['views_entity_node']['publish_node'] = array(
    'field' => array(
      'title' => t('Publish link'),
      'help' => t('Provide a simple link to publish the content.'),
      'handler' => 'common_views_handler_field_node_link_publish',
    ),
  );

  $data['views']['ref_dialog_button'] = array(
    'field' => array(
      'title' => t('Reference button'),
      'help' => t('Provide a button to choose a reference.'),
      'handler' => 'common_views_handler_field_ref_link_insert',
    ),
  );

  // Month node views count.
  $data['node_counter']['month_count'] = array(
    'title' => t('Month count'),
    'help' => t('Month number of times the node has been viewed.'),

    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );

  // Link to delete the term.
  $data['taxonomy_term_data']['delete_term'] = array(
    'field' => array(
      'title' => t('Term delete link'),
      'help' => t('Provide a simple link to delete the term.'),
      'handler' => 'common_views_handler_field_term_link_delete',
    ),
  );

  // Link to edit the term.
  $data['views']['edit_block'] = array(
    'field' => array(
      'title' => t('Bean block edit link'),
      'help' => t('Provide a simple link to edit the bean block.'),
      'handler' => 'common_views_handler_field_bean_block_link_edit',
    ),
  );

  // Link to delete the term.
  $data['views']['delete_block'] = array(
    'field' => array(
      'title' => t('Bean block delete link'),
      'help' => t('Provide a simple link to delete the bean block.'),
      'handler' => 'common_views_handler_field_bean_block_link_delete',
    ),
  );

  // Link to edit the term.
  $data['views']['edit_author'] = array(
    'field' => array(
      'title' => t('Edit author'),
      'help' => t('Provide a simple link to edit the author.'),
      'handler' => 'common_views_handler_author_link_edit',
    ),
  );

  // Link to delete the term.
  $data['views']['delete_author'] = array(
    'field' => array(
      'title' => t('Delete author'),
      'help' => t('Provide a simple link to delete the author.'),
      'handler' => 'common_views_handler_author_link_delete',
    ),
  );

  return $data;
}

/**
 * Implements hook_views_data_alter().
 */
function common_views_data_alter(&$data) {
  // Change join type for statistics.
  $data['node_counter']['table']['join']['node']['type'] = 'INNER';
  // Add bean type to views schema.
  if (isset($data['bean'])) {
    $data['bean']['type']['field'] = array(
      'real field' => 'type',
      'handler' => 'views_handler_field',
      'click sortable' => TRUE,
    );
  }

  // Bean.
  $data['users']['activate_user'] = array(
    'field' => array(
      'title' => t('Activate link'),
      'help' => t('Provide a simple link to activate the user.'),
      'handler' => 'common_views_handler_field_user_link_activate',
    ),
  );
  $data['users']['block_user'] = array(
    'field' => array(
      'title' => t('Block link'),
      'help' => t('Provide a simple link to block the user.'),
      'handler' => 'common_views_handler_field_user_link_block',
    ),
  );

  // Nodequeue.
  $data['nodequeue_nodes']['position_before'] = array(
    'title' => t('Position before'),
    'help' => t('Dummy handler for custom sort.'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'sort' => array(
      'handler' => 'common_views_handler_nodequeue_position_before_null',
    ),
  );

  $data['asset']['common_edit_asset'] = array(
    'field' => array(
      'title' => t('Le site asset edit link'),
      'help' => t('Provide a simple link to edit the asset.'),
      'handler' => 'common_views_handler_field_asset_link_edit',
    ),
  );
  $data['asset']['common_delete_asset'] = array(
    'field' => array(
      'title' => t('Le site asset delete link'),
      'help' => t('Provide a simple link to delete the asset.'),
      'handler' => 'common_views_handler_field_asset_link_delete',
    ),
  );
}
