<?php

/**
 * @file
 * Theme setting callbacks for the Common theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function common_admin_form_system_theme_settings_alter(&$form, &$form_state) {
  $options = array('none' => t('none'), 'common-menu-1' => 'common-menu-1', 'common-menu-2' => 'common-menu-2');
  if (function_exists('menu_block_block_info')) {
    foreach (menu_block_block_info() as $delta => $data) {
      $options[$delta] = $data['info'];
    }
    $form['common_admin_menu_level_1'] = array(
      '#type' => 'select',
      '#title' => t('Common Admin Menu Level 1'),
      '#options' => $options,
      '#default_value' => theme_get_setting('common_admin_menu_level_1'),
    );
    $form['common_admin_menu_level_2'] = array(
      '#type' => 'select',
      '#title' => t('Common Admin Menu Level 2'),
      '#options' => $options,
      '#default_value' => theme_get_setting('common_admin_menu_level_2'),
    );
  }
}
