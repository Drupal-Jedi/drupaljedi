<?php
/**
 * @file
 * common_dashboard_medialibrary.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function common_dashboard_medialibrary_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function common_dashboard_medialibrary_views_api() {
  return array("version" => "3.0");
}
