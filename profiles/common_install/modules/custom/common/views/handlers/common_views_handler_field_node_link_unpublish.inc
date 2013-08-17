<?php
/**
 * @file
 * Field handler to present a link node unpublish.
 */
class common_views_handler_field_node_link_unpublish extends views_handler_field_node_link {

  /**
   * Renders the link.
   */
  function render_link($node, $values) {
    // Ensure user has access to edit this node.
    if (!node_access('update', $node) || !$node->status) {
      return;
    }

    $this->options['alter']['make_link'] = TRUE;
    $this->options['alter']['path'] = "node/$node->nid/unpublish";
    $this->options['alter']['query'] = drupal_get_destination();

    $text = !empty($this->options['text']) ? $this->options['text'] : t('Depublier');
    return $text;
  }
}
