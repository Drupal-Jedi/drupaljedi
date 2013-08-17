<?php

/**
 * @file
 * Template for image field.
 */

if (isset($row->asset_type)) {
  switch($row->asset_type) {

    case 'video':
      if (!empty($row->field_field_asset_video[0]['rendered']['#markup'])) {
        print $output;
      }
      else {
        print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/video.png')) . '</span>';
      }
      break;

    case 'image':
      print $output;
      break;

    case 'poll':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/poll.gif')) . '</span>';
      break;

    case 'diaporama':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/photo-gallery.png')) . '</span>';
      break;

    case 'free_html':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/google-maps.jpg')) . '</span>';
      break;

  }
}
else {
  print $output;
}
?>
