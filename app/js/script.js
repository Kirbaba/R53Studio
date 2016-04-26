jQuery(document).ready(function($) {
	$('.js_input_file').on("click", function(event) {
		event.preventDefault();	
		 $("#stock__form_file").trigger('click');	

	});

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
});
