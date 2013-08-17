<?php
/**
 * @file
 * Page template.
 */
?>
<div id='branding'><div class='limiter clearfix'>
  <div class='breadcrumb clearfix'><?php print $breadcrumb ?></div>
  <?php if (!$overlay && isset($secondary_menu)) : ?>
    <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => 'links secondary-menu'))) ?>
  <?php endif; ?>
</div></div>
<?php if ($logo): ?>
  <div id="site-logo">
    <a href="<?php print $front_page ?>">
      <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
    </a>
  </div>
  <?php endif; ?>
<div id='page-title'><div class='limiter clearfix'>
  <?php if (!empty($common_admin_menu_level_1)) :?>
    <div class="common-admin-menu-level-1">
      <?php print $common_admin_menu_level_1; ?>
    </div>
  <?php endif;?>
  <?php if (!empty($common_admin_menu_level_2)) :?>
    <div class="common-admin-menu-level-2">
      <?php print $common_admin_menu_level_2; ?>
    </div>
  <?php endif;?>
  <div class='tabs clearfix'>
    <?php if ($primary_local_tasks && user_access('administer site configuration')): ?>
      <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
    <?php endif; ?>
  </div>
  <?php print render($title_prefix); ?>
  <h1 class='page-title <?php print $page_icon_class ?>'>
    <?php if (!empty($page_icon_class)): ?><span class='icon'></span><?php endif; ?>
    <?php if (!empty($title)): ?>
      <?php print $title; ?>
    <?php endif; ?>
  </h1>
  <?php if ($action_links): ?>
    <ul class='action-links links clearfix'><?php print render($action_links) ?></ul>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
</div></div>
<?php if ($_GET['q'] == 'admin/dashboard') : ?>
  <div id="dashboard-dm-message">
    <div class="block-dm-user-name"><?php print t('Bonjour @username!', array('@username' => $user_name)); ?></div>
  </div>
<?php endif; ?>
<?php if ($show_messages && $messages): ?>
<div id='console'><div class='limiter clearfix'><?php print $messages; ?></div></div>
<?php endif; ?>

<div id='page'><div id='main-content' class='limiter clearfix'>
  <?php if ($page['help']) print render($page['help']) ?>
  <div id='content' class='page-content clearfix'>
    <?php if (!empty($page['content'])) print render($page['content']) ?>
  </div>
</div></div>

<div id='footer' class='clearfix'>
  <?php if ($feed_icons): ?>
    <div class='feed-icons clearfix'>
      <label><?php print t('Feeds') ?></label>
      <?php print $feed_icons ?>
    </div>
  <?php endif; ?>
</div>
