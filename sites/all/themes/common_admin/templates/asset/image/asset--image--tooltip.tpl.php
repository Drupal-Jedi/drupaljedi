<?php

/**
 * @file
 */
?>
<?php if (empty($asset->gallery_item)): ?>
  <ul class="full-slide" style="height: 237px;">
    <li style="display: block;" class="active">
      <div class="full-item">
        <div class="holder">
          <?php print render($content); ?>
        </div>
      </div>
    </li>
  </ul>
<?php else: ?>
  <?php print render($content); ?>
<?php endif; ?>