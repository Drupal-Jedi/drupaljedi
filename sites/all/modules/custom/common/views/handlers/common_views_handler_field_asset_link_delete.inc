<?php
/**
 * Field handler to present a link asset edit.
 *
 * @ingroup views_field_handlers
 */
class common_views_handler_field_asset_link_delete extends asset_views_handler_field_asset_link {
  /**
   * Renders the link.
   */
  function render_link($asset, $values) {
    // Ensure user has access to edit this entity.
    if (!entity_access('delete', 'asset', $asset)) {
      return;
    }

    if ($asset->type == 'poll') {
      $nid = field_get_items('asset', $asset, 'field_poll');
      $this->options['alter']['path'] = 'node/' . $nid[0]['target_id'] . '/delete';
    }
    else {
      $this->options['alter']['path'] = "admin/content/assets/manage/$asset->aid/delete";
    }

    $this->options['alter']['make_link'] = TRUE;
    $this->options['alter']['query'] = drupal_get_destination();

    $text = !empty($this->options['text']) ? $this->options['text'] : t('delete');
    return $text;
  }
}
