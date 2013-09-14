<?php
/**
 * @file
 * common_content_type_article.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function common_content_type_article_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_article_catchline'
  $field_bases['field_article_catchline'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_article_catchline',
    'field_permissions' => array(
      'type' => 0,
    ),
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_article_main_media'
  $field_bases['field_article_main_media'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_article_main_media',
    'field_permissions' => array(
      'type' => 0,
    ),
    'foreign keys' => array(
      'asset' => array(
        'columns' => array(
          'target_id' => 'aid',
        ),
        'table' => 'asset',
      ),
    ),
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'gallery' => 'gallery',
          'image' => 'image',
          'poll' => 'poll',
          'video' => 'video',
        ),
      ),
      'handler_submit' => 'Change handler',
      'target_type' => 'asset',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  // Exported field_base: 'field_article_media'
  $field_bases['field_article_media'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_article_media',
    'field_permissions' => array(
      'type' => 0,
    ),
    'foreign keys' => array(
      'asset' => array(
        'columns' => array(
          'target_id' => 'aid',
        ),
        'table' => 'asset',
      ),
    ),
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'image' => 'image',
        ),
      ),
      'handler_submit' => 'Change handler',
      'target_type' => 'asset',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  // Exported field_base: 'field_body'
  $field_bases['field_body'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_body',
    'field_permissions' => array(
      'type' => 0,
    ),
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  return $field_bases;
}
