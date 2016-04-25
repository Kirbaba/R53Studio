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
            items : 6,
            slideSpeed : 1000,
            paginationSpeed : 400,
            touchDrag: true,
            autoplayHoverPause: true,
            items: [6],
            navigation: true,
            navigationText : false,
            pagination : false
      });
});
