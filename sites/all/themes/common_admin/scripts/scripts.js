jQuery(document).ready(function(){
	jQuery('.gallery-parent').each(function(){
		var parent = jQuery(this);
		var gallery = parent.find('.gallery-holder');
		var switcherGallery = gallery.find('.gallery-hold');
		var lightbox = parent.find('.lightbox');
		var appender = lightbox.find('.appender');
		var galleryClone = gallery.clone();
		var switcherGalleryClone = galleryClone.find('.gallery-hold');

		appender.append(galleryClone);
		lightbox.appendTo(jQuery('body'));
		gallery.gallery({
			effect: true,
			listOfSlides: '.full-slide > li',
			switcher: '.content-slider-list > li',
			synchronize: galleryClone,
			autoHeight: true,
			nextBtn: 'a.btn-next-full',
			prevBtn: 'a.btn-prev-full',
			circle: false
		});
		switcherGallery.gallery({
			duration: 500,
			synchronize: switcherGalleryClone,
			listOfSlides: '.content-slider-list > li',
			circle: false
		});
		galleryClone.gallery({
			effect: true,
			listOfSlides: '.full-slide > li',
			switcher: '.content-slider-list > li',
			synchronize: gallery,
			autoHeight: true,
			nextBtn: 'a.btn-next-full',
			prevBtn: 'a.btn-prev-full',
			circle: false
		});
		switcherGalleryClone.gallery({
			duration: 500,
			synchronize: switcherGallery,
			listOfSlides: '.content-slider-list > li',
			circle: false
		});
	});

	//init gallery
	jQuery('div.content-slider-carousel').gallery({
		duration: 500,
		listOfSlides: '.content-slider-list > li'
	});
	jQuery('div.side-slider').gallery({
		duration: 500,
		listOfSlides: '.side-slider-list > li',
		switcher: '.side-slider-nav>li'
	});
	jQuery('div.twitt-slider').gallery({
		duration: 500,
		listOfSlides: '.holder > .frame > ul > li',
		switcher: false
	});
	jQuery('div.flash-slider').gallery({
		duration: 500,
		listOfSlides: '.frame > ul > li',
		autoRotation: 5000,
		effect: true,
		switcher: false
	});
	jQuery('div.flash-slider').mouseenter(function(){
		jQuery('div.flash-slider').gallery('stop');
			}).mouseleave(function(){
		jQuery('div.flash-slider').gallery('play');
	})

	// top search
	jQuery('.open-search-panel').click(function () {
		jQuery('.search-panel').slideDown();
		jQuery('.search-btn').addClass("active");
		return false;
	});
	jQuery('.close-search-panel').click(function () {
		jQuery('.search-panel').slideUp();
		jQuery('.search-btn').removeClass("active");
		return false;
	});

});

function initSlideShow() {
	jQuery('div.full-slide-holder').fadeGallery({
		slides: '.full-slide > li',
		currentNumber: false,
		totalNumber: false,
		switchSimultaneously: true,
		disableWhileAnimating: false,
		generatePagination: false,
		autoRotation: false,
		autoHeight: true,
		switchTime: 2000,
		animSpeed: 0
	});
	jQuery('div.slide-links').fadeGallery({
		slides: '.holder > ul',
		currentNumber: false,
		totalNumber: false,
		btnPrev: 'a.prev',
		btnNext: 'a.next',
		switchSimultaneously: true,
		disableWhileAnimating: false,
		generatePagination: false,
		autoRotation: false,
		autoHeight: true,
		switchTime: 2000,
		animSpeed: 0
	});
}
function initVideo360() {
	jQuery('div.video360').gallery({
		duration: 500,
		addActiveClass: 'cur-num-',
		nextBtn: 'a.next-teaser',
		prevBtn: 'a.prev-teaser',
		listOfSlides: '.video360-slider-list > li'
	});
}
// video360
function initModeVideo360() {
	jQuery('.btn-video-more').click(function () {
		jQuery(this).parent().toggleClass('active');
		//jQuery(this).parent().find(".video360-slider").animate({height:'500'},500);
		jQuery("ul.video360-slider-list").toggleClass('mode-full');
		jQuery("ul.video360-slider-list").toggleClass('mode-teaser');
		return false;
	});
	jQuery('.btn-video-more').toggle(function(){
		var height = jQuery('.video360-slider').css('height','auto').height();
		jQuery('.video360-slider').height(163);
		jQuery('.video360-slider').animate({
			height: height
		}, 500);
	},
	function(){
		jQuery('.video360-slider').animate({
			height: "163"
		}, 500);
	});
}
//flash-news
function initFlashNews() {
	jQuery('.close-flash-news').click(function () {
		jQuery(this).parent().parent().fadeOut(200);
		return false;
	});
}

function openLightboxLang(){
  jQuery('a.open-popup.open-lang').trigger('click');
}
function openLightboxBanner(){
  jQuery('a.open-popup.open-banner').trigger('click');
}

jQuery(function(){
	initSlideShow();
  if ((typeof(Drupal) == 'undefined')) {
    openLightboxLang();
    openLightboxBanner();
    initVideo360();
    initModeVideo360();
    initFlashNews();
  }
});
