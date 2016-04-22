jQuery(document).ready(function($) {
  var allPanels = $('.accordion > ul').hide();
    
  $('.accordion > h3 > a').click(function(event) {
      event.preventDefault();
      if ($(this).parent().next().is('ul')) {
        $('.accordion h3').removeClass('active-title');
        $(this).parent().addClass('active-title');
        $this = $(this);
        $target =  $this.parent().next();

        if(!$target.hasClass('active')){
           allPanels.removeClass('active').slideUp();
           $target.addClass('active').slideDown();
        }

      }
      else {
        location.href();
      }
      
      
   
  });
});

jQuery(document).ready(function($) {
      jQuery(".owl_modal").owlCarousel({    
            navigation : false, 
            items : 3,
            slideSpeed : 1000,
            paginationSpeed : 400,
            touchDrag: true,
            autoplayHoverPause: true,
            items: [3],
            navigation: true,
            navigationText : false,
            pagination : false
      });
});

jQuery(document).ready(function($) {
	$('.day-switch_night').on("click", function(event) {
		 event.preventDefault();
		$('.site-content').removeClass('bg_day');
		$('.site-content').addClass('bg_night');		
	});
	$('.day-switch_day').on("click", function(event) {
		 event.preventDefault();
		$('.site-content').removeClass('bg_night');
		$('.site-content').addClass('bg_day');		
	});

	$('.go-inside').on("click", function(event) {
		 event.preventDefault();
		$('.site-content').addClass('bg_inside');
		$('.js_outside').fadeOut();	
		$('.js_inside').fadeIn();		
	});
	$('.go-outside').on("click", function(event) {
		 event.preventDefault();
		$('.site-content').removeClass('bg_inside');	
		$('.js_inside').fadeOut();	
		$('.js_outside').fadeIn();	
	});

	$('.show-info').on("click", function(event) {
		 event.preventDefault();
		$('.show-info').fadeOut();
		var current = ($(this).data('modal'));
		$("."+current).fadeIn();	
	});

	$('.modal__home_close').on("click", function(event) {
		 event.preventDefault();
		$(this).parent().parent().parent().fadeOut();	
		$('.show-info').fadeIn();	
	});
	
	(function () {
         lightbox.option({
            'albumLabel': ""
         });
    })(jQuery);
});
