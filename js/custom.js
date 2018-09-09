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

$('nav > ul > li > ul > li > ul > li').stop().hover(function () {
    $(this).children('ul.sub-menu').stop().fadeIn(300);
    $(this).addClass('active');
}, function () {
    $(this).find('ul.sub-menu').stop().fadeOut(300);
    $(this).removeClass('active');
}, config);
