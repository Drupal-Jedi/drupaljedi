<?php
/**
 * @file
 * Field handler to present a link user edit.
 */
class common_views_handler_author_link_delete extends views_handler_field_custom {
  /**
   * Renders the link.
   */
  function render_link($uid) {
    $this->options['alter']['path'] = "user/$uid/cancel";
    $this->options['alter']['make_link'] = TRUE;
    $this->options['alter']['query'] = drupal_get_destination();
    $this->options['alter']['query'][] = array('mode' => 'author');

    $text = !empty($this->options['text']) ? $this->options['text'] : t('delete');
    return $text;
  }

  function render($values) {
    if (!empty($values->uid)) {
      return $this->render_link($values->uid);
    }
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

    // The path is set by render_link function so don't allow to set it.
    $form['alter']['path'] = array('#access' => FALSE);
    $form['alter']['external'] = array('#access' => FALSE);
  }
}
