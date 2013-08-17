
common_views_handler_field_user_link_block.inc

<?php
/**
 * @file
 * Field handler to present a link node publish.
 */
class common_views_handler_field_user_link_activate extends views_handler_field_user_link {

  /**
   * Renders the link.
   */
  function render_link($data, $values) {
    $user = user_load($data);
    if ($user->status) {
      return;
    }
    $text = !empty($this->options['text']) ? $this->options['text'] : t('Activate');

    $this->options['alter']['make_link'] = TRUE;
    $this->options['alter']['path'] = 'user/' . $data . '/status/1';

    return $text;
  }
}
