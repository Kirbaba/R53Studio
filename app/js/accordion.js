jQuery(document).ready(function($) {
  var allPanels = $('.accordion > ul').hide();
    
  $('.accordion > h3 > a').click(function(event) {
      event.preventDefault();
      if ($(this).parent().next().is('ul')) {
        $('.accordion h3').removeClass('active-title');
        $(this).addClass('js-accordion_title');
        $(this).parent().addClass('active-title');
        $this = $(this);
        $target =  $this.parent().next();

        if(!$target.hasClass('active')){
           allPanels.removeClass('active').slideUp();
           $target.addClass('active').slideDown();
           $(this).removeClass('js-accordion_title');
        }        
      }
      else {
        location.href();
      }      
   
  });
  $('.js-accordion_title').click(function(event) {
      event.preventDefault();
      $target =  $this.parent().next();
      $(this).parent().removeClass('active-title');
      $target.removeClass('active').slideUp();
  });
});
