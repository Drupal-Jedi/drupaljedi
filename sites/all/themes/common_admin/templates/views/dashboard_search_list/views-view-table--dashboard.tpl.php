<?php
/**
 * @file
 * Template to display a view as a table.
 */
?>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
    <tr>
      <?php $count = 0; ?>
      <?php foreach ($header as $field => $label): ?>
        <?php $count++; ?>
        <?php if ($field != 'field_asset_video'): ?>
          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
        <?php endif; ?>
        <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
    </thead>
  <?php endif; ?>
  <tbody>
  <?php foreach ($rows as $row_count => $row): ?>
  <tr class="<?php print implode(' ', $row_classes[$row_count]); ?>">
    <?php foreach ($row as $field => $content): ?>
      <?php if ($field == 'title'): ?>
        <?php if (!empty($field_classes[0][0]) && $field_classes[0][0] == 'views-empty'): ?>
          <td colspan="<?php print $count; ?>" class="title-td">
        <?php else: ?>
          <td class="title-td">
        <?php endif; ?>
      <?php elseif ($field != 'field_asset_video'): ?>
        <td>
      <?php endif; ?>
      <?php print $content; ?>
      <?php if ($field == 'field_asset_video'): ?>
        </td>
      <?php elseif ($field != 'field_asset_image'): ?>
        </td>
      <?php endif; ?>
    <?php endforeach; ?>
  </tr>
    <?php endforeach; ?>
  </tbody>
</table>
