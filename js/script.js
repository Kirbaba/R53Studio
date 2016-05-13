jQuery(document).ready(function ($) {
    var allPanels = $('.accordion > ul').hide();

    $('.accordion > h3 > a').click(function (event) {
        event.preventDefault();
        var link = $(this).attr('href');
        console.log(link);
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
            location.href = link;
        }

    });

    $('.sidebar-left_go-btn').on('click', function(){
        location.href = $(this).attr('href');
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

      jQuery(".trust__carousel").owlCarousel({    
            navigation : false, 
            items : 4,
            slideSpeed : 1000,
            paginationSpeed : 400,
            touchDrag: true,
            autoplayHoverPause: true,
            items: [4],
            navigation: true,
            navigationText : false,
            pagination : false
      });
});

ymaps.ready(init);
        
function init() {
    var myMap = new ymaps.Map('map', {
            center: [53.902257, 27.561831],
            zoom: 16,
            controls: [],
            
        })  ;
    myGeoObject = new ymaps.GeoObject({
        // Описание геометрии.
        geometry: {
            type: "Point",
            coordinates: [53.897057, 27.561831]
        },
        // Свойства.
        properties: {
            // Контент метки.
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }
    });
    
    myMap.behaviors.disable('scrollZoom');

    myMap.geoObjects
        .add(myGeoObject);
}
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
