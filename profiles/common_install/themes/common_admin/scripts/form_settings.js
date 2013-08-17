(function($) {

  // Custom form settings.
  Drupal.behaviors.formSettings = {
    attach: function (context) {
      // Remove enter form submit from not submit buttons.
      $('input:not(:submit)').keypress(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
          return false;
        }
      });
    }
  };

})(jQuery);
