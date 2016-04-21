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
