<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php
if (isset($row->asset_type_asset_type)) {
  switch($row->asset_type_asset_type) {
    case 'video':
      if (!empty($row->field_field_asset_video[0]['rendered']['#markup'])) {
        print $output;
      }
      else {
        print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/video.png')) . '</span>';
      }
      break;
    case 'image':
      break;
    case 'audio':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/audio.png')) . '</span>';
      break;
    case 'document':
      print '<span class="asset-tooltip" rel="assets/tooltip/' . $row->aid . '/tooltip ">' . theme('image', array('path' => path_to_theme() . '/images/media_gallery/doc.png')) . '</span>';
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
