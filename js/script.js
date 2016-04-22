jQuery(document).ready(function ($) {
    var allPanels = $('.accordion > ul').hide();

    $('.accordion > h3 > a').click(function (event) {
        event.preventDefault();
        if ($(this).parent().next().is('ul')) {
            $('.accordion h3').each(function () {
                $(this).removeClass('active-title');
            });
            $(this).parent().addClass('active-title');
            $(this).addClass('js-accordion_title');
            //$(this).parent().addClass('active-title');
            /*var t = $(this);
            var target = t.parent().next();*/

            if($(this).parent().next().hasClass('active')){
                $(this).parent().next().removeClass('active');
                $(this).parent().next().slideUp();
                $(this).parent().removeClass('active-title');
            }
            else {
                $('.accordion > ul').each(function(){
                    $(this).removeClass('active');
                    $(this).slideUp();
                    //$(this).prev().removeClass('active-title');
                });
                $(this).parent().next().addClass('active');
                $(this).parent().next().slideDown();
            }

            /*if (!target.hasClass('active')) {
                allPanels.removeClass('active').slideUp();
                target.addClass('active').slideDown();
                $(this).removeClass('js-accordion_title');
            }*/
        }
        else {
            location.href();
        }

    });
    /* $('.js-accordion_title').click(function(event) {
     event.preventDefault();
     $target =  $this.parent().next();
     $(this).parent().next().removeClass('active-title');
     $target.removeClass('active').slideUp();
     });*/
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
