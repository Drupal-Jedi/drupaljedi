<?php
/**
 * @file
 * Definition of the 'block' panel style.
 */

// Plugin definition
$plugin = array(
  'title' => t('Pane without title'),
  'description' => t('Display the pane without title.'),
  'render pane' => 'panels_no_title_style_render_pane',
  'weight' => -10,
);

/**
 * Render callback.
 *
 * @ingroup themeable
 */
function theme_panels_no_title_style_render_pane(&$vars) {
  $vars['content']->title = '';
}

