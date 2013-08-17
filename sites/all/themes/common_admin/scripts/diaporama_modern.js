(function ($) {

  /* Image carousel */
  function fr3Carousel(c, size, step, time){
    var $this = $(c);
    if (!$this[0]) return;

    $this.not('.carousp').addClass('carousp').carous({
      generatePager: true,
      generatePagerItems: true,
      size: size,
      step: step,
      auto: time
    });

    $this
      .bind('mouseover', function(){
        $(this).addClass('carous-mouse-over');
      })
      .bind('mouseout', function(){
        $(this).removeClass('carous-mouse-over');
      });
  };

  function fancybox(c, hideOnOverlayClick, enableEscapeButton){
    //default popup options
    var options = {
      padding:0,
      margin:0,
      transitionIn : 'none',
      transitionOut : 'none',
      centerOnScroll: true,
      scrolling: 'no',
      overlayColor: false,
      overlayOpacity : 1,
      hideOnOverlayClick: true,
      enableEscapeButton: true
    };

    $(c).fancybox($.extend({}, options, {
      hideOnOverlayClick: hideOnOverlayClick,
      enableEscapeButton: enableEscapeButton,
      onStart: function(){
      },
      onCancel: function(){

      },
      onComplete: function(){
        $('.fr3-content-video-block').css({ visibility: 'hidden' }); // flash video hack

        fr3Carousel('.popup-fr3-carousel', 1, 1, false);
        var currentElement = $('.block-fr3-gallery-carousel')[0]._carousel.currentItem;
        $('.popup-fr3-carousel')[0]._carousel.scroll(currentElement, 0);
      },
      onCleanup: function(){
        var currentPopupElement = $('.popup-fr3-carousel')[0]._carousel.currentItem;
        $('.block-fr3-gallery-carousel')[0]._carousel.scroll(currentPopupElement, 0);
      },
      onClosed: function(){
        $('.fr3-content-video-block').css({ visibility: 'visible' }); // remove flash video hack
      }
    }));
  };


  /* Image slider */
  function fr3ImageSlider(c, anmTime){
    $(c).not('.slider-processed').each(function(){
      var $this = $(this);
      $this.addClass('slider-processed');
      var item = $this.find('img');

      var pagerWrapper = $('<div class="pager-wrapper"></div>');
      $this.append(pagerWrapper);
      function pagerCreator(item){
        pagerWrapper.append('<span class="pager-item">' + item + '</span>');
      };
      for(i=1;i<=item.length;i++){
        pagerCreator(i);
      };

      var clickItem = $this.find('.pager-item');
      clickItem.filter(':first').addClass('pager-item-active');
      item.css({ opacity: 0 }).filter(':first').addClass('z-index').css({ opacity: 1 });

      clickItem.bind('click', function(){
        var index = clickItem.index(this);
        clickItem.removeClass('pager-item-active').eq(index).addClass('pager-item-active');
        item.eq(index).stop().animate({
          opacity: 1
        }, anmTime);
        item.not(item.eq(index)).stop().animate({
          opacity: 0
        }, anmTime);
      });
    });
  };

  function fr3ImageSliderInit(){
    fr3ImageSlider('.block-fr3-slider', 700);
  };

  function fr3CarouselGallery(c, size, step, time){
    var $this = $(c);
    $this.each(function(){
      var $this = $(this),
        mainGallery = $this.find('.block-fr3-gallery-carousel'),
        pagerGallery = $this.find('.block-gallery-preview');

      fr3Carousel(pagerGallery, 4, 4, false);

      var pagerThis = pagerGallery.find('.item-list ul'),
        fullView = $this.find('.view-full-screen'),
        pagerTrigger = $this.find('.block-pager-trigger'),
        pagerTriggerNext = pagerTrigger.find('.last'),
        pagerTriggerPrev = pagerTrigger.find('.first');

      pagerThis.append('<li class="last">Next</li>'),
        pagerThis.prepend('<li class="first">Prev</li>');

      pagerTrigger.show();
      fullView.show();
      pagerTriggerNext.bind('click', function(){
        pagerThis.find('.last').trigger('click');
      });
      pagerTriggerPrev.bind('click', function(){
        pagerThis.find('.first').trigger('click');
      });

      mainGallery.not('.carousp').addClass('carousp').carous({
        generatePager: false,
        generatePagerItems: false,
        size: size,
        step: step,
        auto: time,
        getPager: function(){
          return pagerThis;
        },
        callbackScroll: function(c){
          var initPrvScrool = parseInt(c.currentItem);
          if (typeof(pagerGallery[0]._carousel.scroll) !== 'undefined') {
            pagerGallery[0]._carousel.scroll(initPrvScrool);
          }
        }
      });
    });
  };

  function fr3CarouselInit(){
    fr3Carousel('.block-fr3-carousel', 1, 1, 5000);
    fr3Carousel('.block-france3-carousel', 5, 5, 10000);
    fr3Carousel('.block-fr3-people', 1, 1, 10000);
    fr3Carousel('.block-fr3-tvshow', 3, 3, 10000);

    fr3CarouselGallery('.block-fr3-image-gallery', 1, 1, false);
  };

  Drupal.behaviors.geopolisDIaporama = {
    attach : function(context, string) {
      fancybox('.fancybox-element', true, true);
      fr3CarouselInit();
      fr3ImageSliderInit();
    }
  };
})(jQuery);
