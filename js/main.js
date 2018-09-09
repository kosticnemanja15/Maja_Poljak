$ = jQuery.noConflict();
$(document).ready(function () {

    hidePageLoading();
 

  $('#menu-button').sidr({
            name: 'sidr-right',
            side: 'right',
            source: '.nav-holder'
        });

        $('body').click(function () {
            $.sidr('close', 'sidr-right');
        });
        $(window).resize(function () {
            $.sidr('close', 'sidr-right');
        });

        var config = {
            sensitivity: 10,
            interval: 5000,
            timeout: 50000
        };

        $('nav > ul > li').stop().hover(function () {
            $(this).children('ul.sub-menu').stop().fadeIn(300);
        }, function () {
            $(this).find('ul.sub-menu').stop().fadeOut(300);
        }, config);

        $('nav > ul > li > ul > li').stop().hover(function () {
            $(this).children('ul.sub-menu').stop().fadeIn(300);
            $(this).addClass('active');
        }, function () {
            $(this).find('ul.sub-menu').stop().fadeOut(300);
            $(this).removeClass('active');
        }, config);
        
         var div_numb = $('aside .col-md-12.col-sm-6').length;
           
           console.log(div_numb);

    });


hidePageLoading = function () {
    $('#page-loading').fadeOut(300);
};
// 