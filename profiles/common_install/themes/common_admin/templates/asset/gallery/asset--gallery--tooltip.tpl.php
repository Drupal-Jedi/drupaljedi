<?php
/**
 * @file
 * Template for diaporama tooltip.
 */
?>
<?php if (!empty($field_asset_gallery_images)): ?>
  <div class="full-slide-holder">
    <?php if (count($field_asset_gallery_images) > 1): ?>
      <a href="#" class="btn-prev"><span>prev</span></a>
      <a href="#" class="btn-next"><span>next</span></a>
    <?php endif; ?>
    <ul class="full-slide">
      <?php foreach ($field_asset_gallery_images as $item): ?>
        <li>
          <div class="full-item">
            <div class="holder">
              <?php $item['entity']->gallery_item = TRUE; ?>
              <?php print render(entity_view('asset', array($item['entity']), 'tooltip')); ?>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
