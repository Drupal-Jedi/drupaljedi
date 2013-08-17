<?php
/**
 * @file
 * Theme hooks and preprocesses.
 */

define('TWITTER_BOOTSTRAP_THEME_PATH', drupal_get_path('theme', 'twitter_bootstrap_panels'));

include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/twitter_bootstrap_panels.inc');
include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/theme.inc');
include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/pager.inc');
include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/form.inc');
include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/admin.inc');
include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/menu.inc');


// @todo we should avoid this construction, and manually add includes.
// Load module include files
$modules = module_list();

foreach ($modules as $module) {
  if (is_file(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/' . str_replace('_', '-', $module) . '.inc')) {
    include_once(TWITTER_BOOTSTRAP_THEME_PATH . '/includes/modules/' . str_replace('_', '-', $module) . '.inc');
  }    
}

/**
 * Implements hook_theme().
 */
function twitter_bootstrap_panels_theme() {
  return array(
    // @todo rename to one format.
    'twitter_bootstrap_panels_links' => array(
      'variables' => array('links' => array(), 'attributes' => array(), 'heading' => NULL),
    ),
    'twitter_bootstrap_panels_btn_dropdown' => array(
      'variables' => array('links' => array(), 'attributes' => array(), 'type' => NULL),
    ),
    'twitter_bootstrap_panels_btn_dropdown_menu_wrapper' => array(
      'render element' => 'tree',
    ),
  );
}

/**
 * Implements THEME__breadcrumb().
 */
function twitter_bootstrap_panels_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $breadcrumbs = '<ul class="breadcrumb">';
    
    $count = count($breadcrumb) - 1;
    foreach($breadcrumb as $key => $value) {
      if($count != $key) {
        $breadcrumbs .= '<li>' . $value . '<span class="divider">/</span></li>';
      }else{
        $breadcrumbs .= '<li>' . $value . '</li>';
      }
    }
    $breadcrumbs .= '</ul>';
    
    return $breadcrumbs;
  }
}

/**
 * Preprocess variables for node.tpl.php
 *
 * @see node.tpl.php
 */
function twitter_bootstrap_panels_preprocess_node(&$variables) {
  if ($variables['teaser']) {
    $variables['classes_array'][] = 'row-fluid';
  }
}

/**
 * Preprocess variables for block.tpl.php
 *
 * @see block.tpl.php
 */
function twitter_bootstrap_panels_preprocess_block(&$variables, $hook) {
  //$variables['classes_array'][] = 'row';
  // Use a bare template for the page's main content.
  if ($variables['block_html_id'] == 'block-system-main') {
    $variables['theme_hook_suggestions'][] = 'block__no_wrapper';
  }
  $variables['title_attributes_array']['class'][] = 'block-title';
}

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function twitter_bootstrap_panels_process_block(&$variables, $hook) {
  // Drupal 7 should use a $title variable instead of $block->subject.
  $variables['title'] = $variables['block']->subject;
}

function _twitter_bootstrap_panels_search_form($form, &$form_state) {
  // Get custom search form for now
  $form = search_form($form, $form_state);

  // Cleanup
  $form['#attributes']['class'][] = 'navbar-search';
  $form['#attributes']['class'][] = 'pull-left';
  $form['basic']['keys']['#title'] = '';
  $form['basic']['keys']['#attributes']['class'][] = 'search-query';
  $form['basic']['keys']['#attributes']['class'][] = 'span2';
  $form['basic']['keys']['#attributes']['placeholder'] = t('Search');
  unset($form['basic']['submit']);
  unset($form['basic']['#type']);
  unset($form['basic']['#attributes']);
  $form += $form['basic'];
  unset($form['basic']);

  return $form;
}

/**
 * Preprocess variables for region.tpl.php
 *
 * @see region.tpl.php
 */
function twitter_bootstrap_panels_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'content') {
    $variables['theme_hook_suggestions'][] = 'region__no_wrapper';
  }
  
  // Me likes
  if ($variables['region'] == "sidebar_first") {
    $variables['classes_array'][] = 'well';
  }
}

/**
 * Returns the correct span class for a region
 */
function _twitter_bootstrap_panels_content_span($columns = 1) {
  $class = FALSE;
  
  switch($columns) {
    case 1:
      $class = 'span12';
      break;
    case 2:
      $class = 'span9';
      break;
    case 3:
      $class = 'span6';
      break;
  }
  
  return $class;
}

/**
 * Preprocess variables for panels-pane.tpl.php
 *
 * @see panels-pane.tpl.php
 */
function twitter_bootstrap_panels_preprocess_panels_pane(&$variables) {
  switch ($variables['pane']->type) {
    case 'page_content':
      $variables['hide_wrappers'] = TRUE;
      break;

    case 'page_slogan':
      $variables['theme_hook_suggestion'] = 'panels_pane__page_slogan';
      break;

    case 'page_site_name':
      $variables['theme_hook_suggestion'] = 'panels_pane__page_site_name';
      break;

    case 'page_logo':
      $variables['classes_array'][] = 'brand';
      break;

    case 'block':
      // Search form in sticky bar has specific look.
      // @todo make universal way for forms in this region.
      if ($variables['pane']->subtype == 'search-form' && $variables['pane']->panel == 'sticky_bar_navigation_left') {
        $variables['classes_array'][] = 'navbar-search';
        unset($variables['content']['actions']);
        $variables['content']['search_block_form']['#attributes']['class'][] = 'span2';
        $variables['content']['search_block_form']['#attributes']['class'][] = 'search-query';
        $variables['content']['search_block_form']['#attributes']['placeholder'] = $variables['content']['search_block_form']['#title'];
      }
      break;
  }

  if ($variables['pane']->panel == 'sticky_bar_navigation_left') {
    $variables['classes_array'][] = 'pull-left';
  }
  elseif ($variables['pane']->panel == 'sticky_bar_navigation_right') {
    $variables['classes_array'][] = 'pull-right';
  }
}

/**
 * Implements theme_panels_default_style_render_region().
 */
function twitter_bootstrap_panels_panels_default_style_render_region(&$variables) {
  $output = implode('', $variables['panes']);
  $no_wrapper_regions = array('content', 'sticky_bar_navigation_left', 'sticky_bar_navigation_right', 'sticky_bar_logo');
  if (!in_array($variables['region_id'], $no_wrapper_regions) && !empty($output)) {
    $classes = array(
      'region',
      'region-' . str_replace('_', '-', $variables['region_id']),
    );
    if($variables['region_id'] == "sidebar_first") {
      $classes[] = 'well';
    }
    $output = '<div class="' . implode(' ', $classes) . '">' . $output . '</div>';

  }

  return $output;
}

/**
 * Return bootstrap default button's types.
 */
function twitter_bootstrap_panels_get_button_types() {
  return variable_get(
    'twitter_bootstrap_button_types',
    array(
      'default' => t('Default'),
      'primary' => t('Primary'),
      'danger' => t('Danger'),
      'warning' => t('Warning'),
      'success' => t('Success'),
      'info' => t('Info'),
      'inverse' => t('Inverse'),
    )
  );
}
