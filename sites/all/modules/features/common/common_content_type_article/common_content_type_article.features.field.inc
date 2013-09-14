<?php
/**
 * @file
 * common_content_type_article.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function common_content_type_article_field_default_fields() {
  $fields = array();

  // Exported field: 'node-article-field_article_catchline'.
  $fields['node-article-field_article_catchline'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_article_catchline',
      'field_permissions' => array(
        'type' => '0',
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
      'locked' => '0',
      'module' => 'text',
      'settings' => array(),
      'translatable' => '0',
      'type' => 'text_long',
    ),
    'field_instance' => array(
      'bundle' => 'article',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'block' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '8',
        ),
        'choose_video' => array(
          'label' => 'above',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '30',
        ),
        'diaporama' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'field_left_article' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '2',
        ),
        'field_right_folder' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'footer' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'full' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '30',
        ),
        'la_une_on_home_page' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '0',
        ),
        'main_article_on_dossier_page' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '0',
        ),
        'mise_en_avant_big' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '10',
        ),
        'mise_en_avant_medium' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '10',
        ),
        'mise_en_avant_on_home_page' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '0',
        ),
        'on_the_same_topic' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'premium diaporama' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '10',
        ),
        'premium_diaporama' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '10',
        ),
        'related_articles' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'related_articles_on_dossier_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'river_of_news_bottom' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '0',
        ),
        'river_of_news_top' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'rss' => array(
          'label' => 'above',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '0',
        ),
        'search_index' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'search_result' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '0',
        ),
        'taxonomy_list' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '1',
        ),
        'teaser' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '12',
        ),
        'top360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video_article' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_plain',
          'weight' => '1',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_article_catchline',
      'label' => 'Teaser',
      'required' => 1,
      'settings' => array(
        'text_processing' => '0',
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'text',
        'settings' => array(
          'rows' => '3',
        ),
        'type' => 'text_textarea',
        'weight' => '6',
      ),
    ),
  );

  // Exported field: 'node-article-field_article_main_media'.
  $fields['node-article-field_article_main_media'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_article_main_media',
      'field_permissions' => array(
        'type' => '0',
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
      'locked' => '0',
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
      'translatable' => '0',
      'type' => 'entityreference',
    ),
    'field_instance' => array(
      'bundle' => 'article',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'block' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '6',
        ),
        'choose_video' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'default' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'link' => FALSE,
          ),
          'type' => 'entityreference_label',
          'weight' => '32',
        ),
        'diaporama' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'small',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'field_left_article' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'field_left_article',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '1',
        ),
        'field_right_folder' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'footer' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'full' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'full',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '32',
        ),
        'la_une_on_home_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'main_article_on_dossier_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'main_article_on_dossier_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'mise_en_avant_big' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'mise_en_avant_medium' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'mise_en_avant_on_home_page' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'mise_en_avant_on_home_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'on_the_same_topic' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'premium diaporama' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'premium diaporama',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '12',
        ),
        'premium_diaporama' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'premium_diaporama',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '12',
        ),
        'related_articles' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'related_articles_on_dossier_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'related_articles_on_dossier_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'river_of_news_bottom' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'river_of_news_top' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'rss' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '6',
        ),
        'search_index' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'search_result' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'taxonomy_list' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '8',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'diaporama_teaser',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '7',
        ),
        'top360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video360' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'video360',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'video_article' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 1,
            'view_mode' => 'video_article',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_article_main_media',
      'label' => 'Main media',
      'required' => 0,
      'settings' => array(
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'entityreference',
        'settings' => array(
          'match_operator' => 'CONTAINS',
          'maxlength_js_label' => 'Content limited to @limit characters, remaining: <strong>@remaining</strong>',
          'path' => '',
          'references_dialog_add' => 1,
          'references_dialog_delete' => 0,
          'references_dialog_edit' => 1,
          'references_dialog_search' => 0,
          'references_dialog_search_view' => '',
          'size' => '60',
        ),
        'type' => 'entityreference_autocomplete',
        'weight' => '3',
      ),
    ),
  );

  // Exported field: 'node-article-field_article_media'.
  $fields['node-article-field_article_media'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_article_media',
      'field_permissions' => array(
        'type' => '0',
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
      'locked' => '0',
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
      'translatable' => '0',
      'type' => 'entityreference',
    ),
    'field_instance' => array(
      'bundle' => 'article',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'block' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'block',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'choose_video' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'choose_video',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'default' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'full',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '17',
        ),
        'diaporama' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '14',
        ),
        'field_left_article' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'field_left_article',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'field_right_folder' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'footer' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'full' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'full',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '17',
        ),
        'la_une_on_home_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'image_la_une_on_home_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'main_article_on_dossier_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'main_article_on_dossier_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'mise_en_avant_big' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(),
          'type' => 'entityreference_entity_id',
          'weight' => '0',
        ),
        'mise_en_avant_medium' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'mise_en_avant_medium',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'mise_en_avant_on_home_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'mise_en_avant_on_home_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'on_the_same_topic' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'on_the_same_topic',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'premium diaporama' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '18',
        ),
        'premium_diaporama' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '18',
        ),
        'related_articles' => array(
          'label' => 'above',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'related_articles',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'related_articles_on_dossier_page' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'related_articles_on_dossier_page',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'river_of_news_bottom' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'river_of_news',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'river_of_news_top' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'river_of_news',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'rss' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'rss',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '1',
        ),
        'search_index' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'search_result' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 1,
            'view_mode' => 'search_result',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'taxonomy_list' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => 0,
            'view_mode' => 'taxonomy_list',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '0',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'entityreference',
          'settings' => array(
            'links' => TRUE,
            'view_mode' => 'teaser',
          ),
          'type' => 'entityreference_entity_view',
          'weight' => '1',
        ),
        'top360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video_article' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '8',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_article_media',
      'label' => 'Picture',
      'required' => 0,
      'settings' => array(
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'entityreference',
        'settings' => array(
          'match_operator' => 'CONTAINS',
          'maxlength_js_label' => 'Content limited to @limit characters, remaining: <strong>@remaining</strong>',
          'path' => '',
          'references_dialog_add' => 1,
          'references_dialog_delete' => 0,
          'references_dialog_edit' => 1,
          'references_dialog_search' => 0,
          'references_dialog_search_view' => '',
          'size' => '60',
        ),
        'type' => 'entityreference_autocomplete',
        'weight' => '2',
      ),
    ),
  );

  // Exported field: 'node-article-field_body'.
  $fields['node-article-field_body'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_body',
      'field_permissions' => array(
        'type' => '0',
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
      'locked' => '0',
      'module' => 'text',
      'settings' => array(),
      'translatable' => '0',
      'type' => 'text_long',
    ),
    'field_instance' => array(
      'bundle' => 'article',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'block' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '12',
        ),
        'choose_video' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '12',
        ),
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'diaporama' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '11',
        ),
        'field_left_article' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '8',
        ),
        'field_right_folder' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'footer' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'full' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'la_une_on_home_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'main_article_on_dossier_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'mise_en_avant_big' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '6',
        ),
        'mise_en_avant_medium' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '6',
        ),
        'mise_en_avant_on_home_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'newsletter' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '3',
        ),
        'on_the_same_topic' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'premium diaporama' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '0',
        ),
        'premium_diaporama' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '0',
        ),
        'related_articles' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'related_articles_on_dossier_page' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'river_of_news_bottom' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'river_of_news_top' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'rss' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '16',
        ),
        'search_index' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'search_result' => array(
          'label' => 'hidden',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '6',
        ),
        'taxonomy_list' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'teaser' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '18',
        ),
        'teaser_big' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '9',
        ),
        'top360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video360' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '0',
        ),
        'video_article' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_body',
      'label' => 'Body',
      'required' => 1,
      'settings' => array(
        'text_processing' => '1',
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'text',
        'settings' => array(
          'rows' => '25',
        ),
        'type' => 'text_textarea',
        'weight' => '7',
      ),
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');
  t('Picture');
  t('Main media');
  t('Teaser');

  return $fields;
}
