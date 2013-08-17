<?php
/**
 * @file
 * common_assets.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function common_assets_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'assets_default_wysiwyg_modes';
  $strongarm->value = array(
    'image' => 'in_body',
    'poll' => 'in_body',
    'video' => 'in_body',
    'free_html' => 'in_body',
    'gallery' => 'in_body',
    'citation' => array(),
  );
  $export['assets_default_wysiwyg_modes'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'assets_wysiwyg_modes';
  $strongarm->value = array(
    'image' => array(
      'full' => 'full',
      'small' => 'small',
    ),
    'video' => array(
      'full' => 'full',
      'small' => 'small',
    ),
    'gallery' => array(
      'full' => 'full',
    ),
  );
  $export['assets_wysiwyg_modes'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_asset__free_html';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'small' => array(
        'custom_settings' => FALSE,
      ),
      'tooltip' => array(
        'custom_settings' => FALSE,
      ),
      'widget_search' => array(
        'custom_settings' => TRUE,
      ),
      'dashboard_article_thumbnail' => array(
        'custom_settings' => TRUE,
      ),
      'related_articles' => array(
        'custom_settings' => TRUE,
      ),
      'video_article' => array(
        'custom_settings' => TRUE,
      ),
      'in_body' => array(
        'custom_settings' => TRUE,
      ),
      'gallery' => array(
        'custom_settings' => FALSE,
      ),
      'diff_standard' => array(
        'custom_settings' => FALSE,
      ),
      'token' => array(
        'custom_settings' => FALSE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_asset__free_html'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_asset__gallery';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'small' => array(
        'custom_settings' => FALSE,
      ),
      'tooltip' => array(
        'custom_settings' => TRUE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_asset__gallery'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_asset__image';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'small' => array(
        'custom_settings' => TRUE,
      ),
      'tooltip' => array(
        'custom_settings' => FALSE,
      ),
      'gallery' => array(
        'custom_settings' => TRUE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
        'metatags' => array(
          'weight' => '5',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_asset__image'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_asset__poll';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'tooltip' => array(
        'custom_settings' => TRUE,
      ),
      'dashboard_article_thumbnail' => array(
        'custom_settings' => TRUE,
      ),
      'small' => array(
        'custom_settings' => FALSE,
      ),
      'gallery' => array(
        'custom_settings' => FALSE,
      ),
      'diff_standard' => array(
        'custom_settings' => FALSE,
      ),
      'token' => array(
        'custom_settings' => FALSE,
      ),
      'widget_search' => array(
        'custom_settings' => TRUE,
      ),
      'related_articles' => array(
        'custom_settings' => TRUE,
      ),
      'video_article' => array(
        'custom_settings' => TRUE,
      ),
      'in_body' => array(
        'custom_settings' => TRUE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
        'metatags' => array(
          'weight' => '4',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_asset__poll'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_asset__video';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'small' => array(
        'custom_settings' => TRUE,
      ),
      'tooltip' => array(
        'custom_settings' => TRUE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_asset__video'] = $strongarm;

  return $export;
}
