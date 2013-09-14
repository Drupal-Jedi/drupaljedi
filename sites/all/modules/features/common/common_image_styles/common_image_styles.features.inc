<?php
/**
 * @file
 * common_image_styles.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function common_image_styles_image_default_styles() {
  $styles = array();

  // Exported image style: asset_image_in_body.
  $styles['asset_image_in_body'] = array(
    'label' => 'asset_image_in_body',
    'name' => 'asset_image_in_body',
    'effects' => array(),
  );

  // Exported image style: asset_image_tooltip.
  $styles['asset_image_tooltip'] = array(
    'label' => 'asset_image_tooltip',
    'name' => 'asset_image_tooltip',
    'effects' => array(
      5 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '400',
          'height' => '225',
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: asset_list_preview.
  $styles['asset_list_preview'] = array(
    'label' => 'asset_list_preview',
    'name' => 'asset_list_preview',
    'effects' => array(
      1 => array(
        'label' => 'Scale',
        'help' => 'Scaling will maintain the aspect-ratio of the original image. If only a single dimension is specified, the other dimension will be calculated.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => '100',
          'height' => '100',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: tooltip.
  $styles['tooltip'] = array(
    'label' => 'tooltip',
    'name' => 'tooltip',
    'effects' => array(
      6 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '372',
          'height' => '225',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}
