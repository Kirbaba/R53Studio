jQuery(document).ready(function($) {
	$('.js_input_file').on("click", function(event) {
		event.preventDefault();	
		 $("#stock__form_file").trigger('click');	

	});

	$('.day-switch_night').on("click", function(event) {
		event.preventDefault();
		$('.day-switch_day').removeClass('day-switch_day_active');
		$(this).addClass('day-switch_night_active');
		$('.site-content').removeClass('bg_day');
		$('.site-content').addClass('bg_night');		
	});
	$('.day-switch_day').on("click", function(event) {
		 event.preventDefault();
		$('.day-switch_night').removeClass('day-switch_night_active');
		$(this).addClass('day-switch_day_active');
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
		$('body').addClass('body-overflow');

	});

	$('.modal__home_close').on("click", function(event) {
		 event.preventDefault();
		$(this).parent().parent().parent().fadeOut();	
		$('.show-info').fadeIn();
		$('body').removeClass('body-overflow');	
	});

	$('#callme').on("click", function(event) {
		 event.preventDefault();
		 $(this).fadeOut();
		$(".modal__callme").fadeIn();	
	});

	$('.modal__callme_close').on("click", function(event) {
		 event.preventDefault();
		$(".modal__callme").fadeOut();	
		$("#callme").fadeIn();	
	});
	
	(function () {
         lightbox.option({
            'albumLabel': ""
         });
    })(jQuery);

    var clock;
    clock = $('.clock').FlipClock({
        clockFace: 'DailyCounter',
        autoStart: false,   
        lang: 'ru'  
    });    

    clock.setTime(440880);
    clock.setCountdown(true);
    clock.start();


    /*$('.page-portfolio__tabmenu_btn').on("click", function(event) {
		event.preventDefault();		 
		$(this).find(".page-portfolio__tabmenu_sub").show();	
	});*/
});
