<?php

/**
 * @file
 * Provides views theme override functions for Bootstrap themes.
 */

/**
 * Display a view as a table style.
 */
function twitter_bootstrap_panels_preprocess_views_view_table(&$vars) {
  $vars['classes_array'][] = 'table';
}

function twitter_bootstrap_panels_preprocess_views_view_grid(&$vars) {
  $vars['class'] .= ' table';
}
