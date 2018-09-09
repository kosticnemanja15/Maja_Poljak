$(document).ready(function(){

  var second_nav =  $('#myTopnav').clone().attr('id','mySidenav').addClass('sidenav');
  second_nav.append('<span class="closebtn">x</span>')
   second_nav.appendTo('body');

$('#main').click(function(e){
    e.preventDefault();
    $('#mySidenav').addClass('open');
    $('.link').css('width','250px');
});

$('.closebtn').click(function(e){
    e.preventDefault();
    $('#mySidenav').removeClass('open');
    $('.link').css('width','auto');
});


$(function() {
  
// Dropdown toggle
$('#myTopnav > ul > li').hover(function(){
  $(this).find('ul').stop().slideToggle();
});
$('#mySidenav > ul > li').click(function(){
  $(this).find('ul').stop().slideToggle();
});

// $(document).click(function(e) {
//   var target = e.target;
//   if (!$(target).is('.dropdown-a') && !$(target).parents().is('.dropdown-a')) {
//     $('.dropdown').hide();

//   }
// });

});

	
});