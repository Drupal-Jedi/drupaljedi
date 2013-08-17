<?php

/**
 * implementation of hook_panels_layouts()
 */

// Plugin definition
$plugin = array(
  'title' => t('Simple container'),
  'category' => t('Twitter bootstrap'),
  'icon' => 'bootstrap_template.png',
  'theme' => 'bootstrap_simple_container',
  'regions' => array(
    'content' => t('Content'),
  ),
);
