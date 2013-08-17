<?php

/**
 * @file
 * Default theme implementation to display a block.
 */
?>
<div id="<?php print $block_html_id; ?>" class="common-admin-menu clearfix contextual-links-region"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php print $content ?>
</div>
