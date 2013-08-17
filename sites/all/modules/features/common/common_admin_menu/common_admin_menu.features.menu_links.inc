<?php
/**
 * @file
 * common_admin_menu.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function common_admin_menu_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-common-admin-menu:admin/common_settings
  $menu_links['menu-common-admin-menu:admin/common_settings'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/common_settings',
    'router_path' => 'admin/common_settings',
    'link_title' => 'Settings',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/articles
  $menu_links['menu-common-admin-menu:admin/dashboard/articles'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/articles',
    'router_path' => 'admin/dashboard/articles',
    'link_title' => 'Articles',
    'options' => array(
      'attributes' => array(),
      'alter' => TRUE,
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/blocks
  $menu_links['menu-common-admin-menu:admin/dashboard/blocks'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/blocks',
    'router_path' => 'admin/dashboard/blocks',
    'link_title' => 'Blocks',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-42',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/multimedia
  $menu_links['menu-common-admin-menu:admin/dashboard/multimedia'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/multimedia',
    'router_path' => 'admin/dashboard/multimedia',
    'link_title' => 'Media',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-45',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/pages
  $menu_links['menu-common-admin-menu:admin/dashboard/pages'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/pages',
    'router_path' => 'admin/dashboard/pages',
    'link_title' => 'Pages',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'alter' => TRUE,
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-43',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/tags
  $menu_links['menu-common-admin-menu:admin/dashboard/tags'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/tags',
    'router_path' => 'admin/dashboard/tags',
    'link_title' => 'Tags',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-44',
  );
  // Exported menu link: menu-common-admin-menu:admin/dashboard/users
  $menu_links['menu-common-admin-menu:admin/dashboard/users'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/dashboard/users',
    'router_path' => 'admin/dashboard/users',
    'link_title' => 'Users',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-41',
  );
  // Exported menu link: menu-common-admin-menu:admin/structure/nodequeue/1/view/1
  $menu_links['menu-common-admin-menu:admin/structure/nodequeue/1/view/1'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/structure/nodequeue/1/view/1',
    'router_path' => 'admin/structure/nodequeue/%/view/%',
    'link_title' => 'Node queue',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'alter' => TRUE,
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '0',
    'weight' => '-46',
  );
  // Exported menu link: menu-common-admin-menu:admin/structure/nodequeue/2/view/2
  $menu_links['menu-common-admin-menu:admin/structure/nodequeue/2/view/2'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'admin/structure/nodequeue/2/view/2',
    'router_path' => 'admin/structure/nodequeue/%/view/%',
    'link_title' => 'Pages',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
    'parent_path' => 'admin/structure/nodequeue/1/view/1',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/1
  $menu_links['menu-common-admin-menu:menu-position/1'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/1',
    'router_path' => 'menu-position/%',
    'link_title' => 'Article add (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/articles',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/10
  $menu_links['menu-common-admin-menu:menu-position/10'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/10',
    'router_path' => 'menu-position/%',
    'link_title' => 'Edit Flash news (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/11
  $menu_links['menu-common-admin-menu:menu-position/11'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/11',
    'router_path' => 'menu-position/%',
    'link_title' => 'Block actions (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/blocks',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/13
  $menu_links['menu-common-admin-menu:menu-position/13'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/13',
    'router_path' => 'menu-position/%',
    'link_title' => 'Block actions (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/blocks',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/2
  $menu_links['menu-common-admin-menu:menu-position/2'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/2',
    'router_path' => 'menu-position/%',
    'link_title' => 'Article edit (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/articles',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/3
  $menu_links['menu-common-admin-menu:menu-position/3'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/3',
    'router_path' => 'menu-position/%',
    'link_title' => 'Assets (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/multimedia',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/4
  $menu_links['menu-common-admin-menu:menu-position/4'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/4',
    'router_path' => 'menu-position/%',
    'link_title' => 'Tags tab (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/tags',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/5
  $menu_links['menu-common-admin-menu:menu-position/5'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/5',
    'router_path' => 'menu-position/%',
    'link_title' => 'Page add (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/pages',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/6
  $menu_links['menu-common-admin-menu:menu-position/6'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/6',
    'router_path' => 'menu-position/%',
    'link_title' => 'Page edit (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'admin/dashboard/pages',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/7
  $menu_links['menu-common-admin-menu:menu-position/7'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/7',
    'router_path' => 'menu-position/%',
    'link_title' => 'Dossier add (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/8
  $menu_links['menu-common-admin-menu:menu-position/8'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/8',
    'router_path' => 'menu-position/%',
    'link_title' => 'Dossier edit (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: menu-common-admin-menu:menu-position/9
  $menu_links['menu-common-admin-menu:menu-position/9'] = array(
    'menu_name' => 'menu-common-admin-menu',
    'link_path' => 'menu-position/9',
    'router_path' => 'menu-position/%',
    'link_title' => 'Add Flash news (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Add Flash news (menu position rule)');
  t('Article add (menu position rule)');
  t('Article edit (menu position rule)');
  t('Articles');
  t('Assets (menu position rule)');
  t('Block actions (menu position rule)');
  t('Blocks');
  t('Dossier add (menu position rule)');
  t('Dossier edit (menu position rule)');
  t('Edit Flash news (menu position rule)');
  t('Media');
  t('Node queue');
  t('Page add (menu position rule)');
  t('Page edit (menu position rule)');
  t('Pages');
  t('Settings');
  t('Tags');
  t('Tags tab (menu position rule)');
  t('Users');


  return $menu_links;
}
