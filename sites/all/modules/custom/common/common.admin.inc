<?php
/**
 * @file
 * Admin theme specific menu callbacks.
 */

/**
 * Le site social links config form.
 */
function common_site_setting_form() {
  $form = array();

  $form['setting_tabs'] = array(
    '#type' => 'vertical_tabs',
  );

  $site_information = variable_get('site_information', array('value' => '', 'format' => NULL));
  $form['setting_tabs']['site_info'] = array(
    '#type' => 'fieldset',
    '#title' => t('Site Info'),
    '#weight' => -2,
    '#attributes' => array(
      'class' => array('site-setting-form-fieldset'),
    ),
    'site_information' => array(
      '#default_value' => $site_information['value'],
      '#type' => 'text_format',
      '#base_type' => 'textarea',
      '#format' => 'full_html',
    ),
  );
  $site_contacts = variable_get('site_contacts', array('value' => '', 'format' => NULL));
  $form['setting_tabs']['site_contacts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Contacts'),
    '#weight' => -2,
    '#attributes' => array(
      'class' => array('site-setting-form-fieldset'),
    ),
    'site_contacts' => array(
      '#default_value' => $site_contacts['value'],
      '#type' => 'text_format',
      '#base_type' => 'textarea',
      '#format' => 'full_html',
    ),
  );

  // Form's end for setting advertise banners.
  $form['submit'] = array(
    '#type' => 'submit',
    '#weight' => 20,
    '#value' => t('Save settings'),
  );

  return system_settings_form($form);
}

/**
 * Ask for confirmation of node depublication.
 */
function common_node_unpublish_confirm($form, &$form_state, $node) {
  $form['#node'] = $node;
  $form['nid'] = array('#type' => 'value', '#value' => $node->nid);
  return confirm_form($form,
    t('Are you sure you want to unpublish %title?', array('%title' => $node->title)),
    'node/' . $node->nid,
    t('%title will be unpublished', array('%title' => $node->title)),
    t('Unpublish'),
    t('Cancel')
  );
}

/**
 * Execute node depublication.
 */
function common_node_unpublish_confirm_submit($form, &$form_state) {
  if ($form_state['values']['confirm']) {
    $node = node_load($form_state['values']['nid'], NULL, TRUE);
    $node->original = clone $node;
    $node->status = 0;
    node_save($node);
    drupal_set_message(t('%title has been unpublished.', array('%title' => $node->title)));
  }
  $form_state['redirect'] = '<front>';
}

/**
 * Ask for confirmation of node publication.
 */
function common_node_publish_confirm($form, &$form_state, $node) {
  $form['#node'] = $node;
  $form['nid'] = array('#type' => 'value', '#value' => $node->nid);
  return confirm_form($form,
    t('Are you sure you want to publish %title?', array('%title' => $node->title)),
    'node/' . $node->nid,
    t('%title will be published', array('%title' => $node->title)),
    t('Publish'),
    t('Cancel')
  );
}

/**
 * Execute node publication.
 */
function common_node_publish_confirm_submit($form, &$form_state) {
  if ($form_state['values']['confirm']) {
    $node = node_load($form_state['values']['nid'], NULL, TRUE);
    $node->original = clone $node;
    drupal_set_message(t('%title has been published.', array('%title' => $node->title)));
    unset($node->publish_on);
    $node->status = 1;
    node_save($node);
  }
  $form_state['redirect'] = '<front>';
}

/**
 * Delete single asset.
 */
function common_asset_delete($asset) {
  if (is_object($asset)) {
    if (!empty($asset->aid)) {
      drupal_goto('admin/content/assets/manage/' . $asset->aid . '/delete', array(
        'query' => array('destination' => 'admin/content/assets/view/' . $asset->aid),
      ));

      return;
    }
  }

  return 'Error $asset argument in common_asset_delete';
}

/**
 * Edit single asset.
 */
function common_asset_edit($asset) {
  if (is_object($asset)) {
    if (!empty($asset->aid)) {
      drupal_goto('admin/content/assets/manage/' . $asset->aid);

      return;
    }
  }

  return 'Error $asset argument in common_asset_edit';
}
