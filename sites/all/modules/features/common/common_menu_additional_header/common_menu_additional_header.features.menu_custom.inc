<?php
/**
 * @file
 * common_menu_additional_header.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function common_menu_additional_header_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-additional-header-menu.
  $menus['menu-additional-header-menu'] = array(
    'menu_name' => 'menu-additional-header-menu',
    'title' => 'Additional header menu',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Additional header menu');


  return $menus;
}
