<?php

/**
 * Field handler to present a term edit link.
 *
 * @ingroup views_field_handlers
 */
class common_views_handler_field_bean_block_link_edit extends views_handler_field {
  function construct() {
    parent::construct();
  }

  function option_definition() {
    $options = parent::option_definition();

    $options['text'] = array('default' => '', 'translatable' => TRUE);

    return $options;
  }

  function options_form(&$form, &$form_state) {
    $form['text'] = array(
      '#type' => 'textfield',
      '#title' => t('Text to display'),
      '#default_value' => $this->options['text'],
    );
    parent::options_form($form, $form_state);
  }

  function query() {
    $this->ensure_my_table();
    $this->add_additional_fields();
  }

  function render($values) {
    if (!empty($values->bean_delta)) {
      $this->options['alter']['make_link'] = TRUE;
      $this->options['alter']['path'] = "block/$values->bean_delta/edit";
      $this->options['alter']['query'] = drupal_get_destination();

      $text = !empty($this->options['text']) ? $this->options['text'] : t('edit');
      return $text;
    }
  }
}
