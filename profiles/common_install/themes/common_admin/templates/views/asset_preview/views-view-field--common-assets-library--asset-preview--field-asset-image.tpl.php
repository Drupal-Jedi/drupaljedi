<?php if (!empty($image_preview)): ?>
  <span class="asset-tooltip" rel="assets/tooltip/<?php print $row->aid; ?>/tooltip"><?php print $image_preview; ?></span>
<?php elseif (!empty($output)): ?>
  <span class="asset-tooltip" rel="assets/tooltip/<?php print $row->aid; ?>/tooltip"><?php print $output; ?></span>
<?php endif; ?>
