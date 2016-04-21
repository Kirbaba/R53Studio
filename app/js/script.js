jQuery(document).ready(function($) {
	$('.day-switch_night').on("click", function() {
		$('.site-content').removeClass('bg_day');
		$('.site-content').addClass('bg_night');		
	});
	$('.day-switch_day').on("click", function() {
		$('.site-content').removeClass('bg_night');
		$('.site-content').addClass('bg_day');		
	});
});