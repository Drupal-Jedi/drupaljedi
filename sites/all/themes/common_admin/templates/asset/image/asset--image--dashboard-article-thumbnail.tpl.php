<?php

/**
 * @file
 */
?>
<?php if ($view_mode == 'dashboard_article_thumbnail'): ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
<?php else: ?>

  <?php if (!$page): ?>
    <strong <?php print $title_attributes; ?>>
        <?php print $title; ?>
    </strong>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>

<?php endif; ?>
