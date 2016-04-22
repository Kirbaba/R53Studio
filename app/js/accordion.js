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
