<?php
/**
 * @file
 * Template default-form.tpl.php
 */
?>
<div class='form form-layout-default clearfix'>
  <div class='column-main'>
    <div class='column-wrapper clearfix'>
      <?php print drupal_render_children($form); ?>
      <?php if (empty($form['actions']) && !empty($actions)) :?>
        <?php print drupal_render($actions); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class='column-side'>
    <div class='column-wrapper clearfix'>
      <?php print drupal_render($sidebar); ?>
      <?php if (function_exists('rubik_render_clone')): ?>
        <?php print rubik_render_clone($sidebar_actions); ?>
      <?php else: ?>
        <?php print drupal_render($sidebar_actions); ?>
      <?php endif; ?>
    </div>
  </div>
  <?php if (!empty($footer)): ?>
  <div class='column-footer'><div class='column-wrapper clearfix'><?php  print drupal_render($footer); ?></div></div>
  <?php endif; ?>
</div>
