/**
 * Drupal.t('symbols')
 * Drupal.t('words')
 */
(function ($) {
  Drupal.behaviors.hideTableSortIcon = {
    attach: function(context) {
      $('.tabledrag-toggle-weight-wrapper').hide();
    }
  };
})(jQuery);
