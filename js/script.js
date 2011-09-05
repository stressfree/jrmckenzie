(function ($) {

  Drupal.behaviors.safariSearch = {
    attach: function() {

  	  if (jQuery.browser.safari) {
         document.getElementById('edit-search-block-form--2').setAttribute('type', 'search');
         $('#edit-search-block-form--2').attr({ 
              autosave: 'nz.jrmckenzie.search',
              results: '9'
            });
      } else {
         $('#edit-search-block-form--2').addClass('not-safari');
      }
      $('#edit-search-block-form--2').val('Search');
      
      $('#edit-search-block-form--2').focus(function() {  
         $(this).addClass("focusedField");  
         if (this.value == 'Search'){  
             this.value = '';  
         }
      });
    }
  };
  
  Drupal.behaviors.lightboxInit = {
    attach: function() {
      $('a.lightbox').lightBox({
		imageLoading: '/sites/all/themes/jrmckenzie/images/loading.gif',
		imageBtnClose: '/sites/all/themes/jrmckenzie/images/close.gif',
		imageBtnPrev: '/sites/all/themes/jrmckenzie/images/prev.gif',
		imageBtnNext: '/sites/all/themes/jrmckenzie/images/next.gif'
   	   });
   	}
  };
  
  Drupal.behaviors.projectStoriesInit = {
    attach: function() {
   	   $("div.project-item").hover(
   	   	function() {
   	   		$("div.project-description", this).slideDown(1000);
   	   	},
   	   	function () {   	   		
   	   		$("div.project-description", this).slideUp(1000);
   	   	});
    }
   };
   
  Drupal.behaviors.projectCarouselInit = {
    attach: function() {
   	   $('div.project-carousel .item-list > ul').jcarousel({
       	auto: 4,
        wrap: 'circular',
        scroll: 1,
        animation: 4000,
        initCallback: carousel_initCallback
       });
    }
   };
   
   
  Drupal.behaviors.homepageSections = {
    attach: function() {
   	 $('div.homepage-section > div.section-wrapper').hover(
   	   	function() {
   	   		$('div.section-link > a', this).addClass('section-link-hover');
   	   		$('div.section-info', this).fadeOut();
   	   	},
   	   	function () {
   	   		$('div.section-link > a', this).removeClass('section-link-hover');
   	   		$('div.section-info', this).fadeIn();
   	   	});
    }
   };

})(jQuery);
 
function carousel_initCallback(carousel) {
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};