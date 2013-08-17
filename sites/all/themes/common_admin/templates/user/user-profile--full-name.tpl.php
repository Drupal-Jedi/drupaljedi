<?php
/**
 * @file
 * Template for user-profile in full_name view mode.
 */
?>
<?php if (!empty($field_user_firstname[0]['safe_value']) && !empty($field_user_lastname[0]['safe_value'])): ?>
  <?php print $field_user_firstname[0]['safe_value'] . ' ' . $field_user_lastname[0]['safe_value']; ?>
<?php else: ?>
  <?php print check_plain($user->name); ?>
<?php endif; ?>
