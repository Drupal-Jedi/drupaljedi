<?php
/**
 * @file
 * common_menu_additional_header.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function common_menu_additional_header_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-additional-header-menu:<front>
  $menu_links['menu-additional-header-menu:<front>'] = array(
    'menu_name' => 'menu-additional-header-menu',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Blogs 360',
    'options' => array(
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Blogs 360');


  return $menu_links;
}
