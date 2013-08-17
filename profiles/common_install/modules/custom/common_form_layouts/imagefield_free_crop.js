(function ($) {
  Drupal.behaviors.imagefield_free_crop_miltusite = {
    attach: function (context, settings) {
      setTimeout(function () {
        if (typeof(settings.imagefield_crop) !== 'undefined') {
          var $this = $('#edit-field-crop-ratio .form-radio', 'form');

          $this.each(function () {
            var $this = $(this);
            if ($this.attr('checked')) {
              if (parseInt($this.val(), 10)) {
                cultureboxJcropApi($this, 'edit-field-asset-image-und-0', {});
              }
            }
            $this.once(function () {
              $this.change(function () {
                cultureboxJcropApi($(this), 'edit-field-asset-image-und-0', {noTimeout: 1});
              })
            });
          });
        }
      }, 1500, context);
    }
  };
})(jQuery);

function cultureboxJcropApi(elem, id, options) {
  if (options.noTimeout != undefined && options.noTimeout == 1) {
    cultureboxCropRatioChange(elem, id)
  }
  else {
    setTimeout(function () {
      cultureboxCropRatioChange(elem, id)
    }, 1500, id);
  }
}

function cultureboxCropRatioChange(elem, id) {
  if (typeof(Jcrop_api[id]) !== 'undefined') {
    if (jQuery(elem).attr('checked')) {
      if (parseInt(jQuery(elem).val(), 10)) {
        var size = jQuery(elem).val().split('x');
        var rate = size[1] / size[0];
        Jcrop_api[id].setOptions({aspectRatio: rate});
      }
      else {
        Jcrop_api[id].setOptions({aspectRatio: 0});
      }
    }
  }
}
