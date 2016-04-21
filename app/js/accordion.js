jQuery(document).ready(function($) {
  var allPanels = $('.accordion > ul').hide();
    
  $('.accordion > h3 > a').click(function() {
      if ($(this).parent().next().is('ul')) {
        console.log('true');
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
