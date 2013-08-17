<?php
/**
 * @file
 * Template for image field.
 */
if (!empty($row->asset_type_asset_type)) {
  switch($row->asset_type_asset_type) {

    case 'image':
      print $output;
      break;

    case 'gallery':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/photo-gallery.png')) . '</span>';
      break;
  }
}
else {
  print $output;
}
?>
