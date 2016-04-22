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

	$('.show-info').on("click", function(event) {
		 event.preventDefault();
		$('.show-info').hide();
		var current = ($(this).data('modal'));
		$("."+current).show();	
	});

	$('.modal__home_close').on("click", function(event) {
		 event.preventDefault();
		$(this).parent().parent().parent().hide();	
		$('.show-info').show();	
	});
	
	(function () {
         lightbox.option({
            'albumLabel': ""
         });
    })(jQuery);
});
