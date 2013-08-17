<?php
/**
 * @file
 * Field handler to present a library button.
 *
 * @ingroup views_field_handlers
 */
class common_views_handler_field_ref_link_insert extends views_handler_field {
  function query() {
    // do nothing -- to override the parent query.
  }

  function render($values) {
    $text = !empty($this->options['text']) ? $this->options['text'] : t('Add to editor');
    return '<button type="button" class="le-ref-button">' . $text . '</button>';
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
}
