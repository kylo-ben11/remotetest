$(document).ready(function(){

//Animate Parallax Buttons
$('.top-parallax-section > div > a').hover(function() {
    $(this).addClass('animated rubberBand duration2  eds-on-hover');
},
function() {
  $(this).removeClass('animated rubberBand duration2  eds-on-hover');
})

//Animate Nav Buttons
$('.main-navigation .menu li a').hover(function() {
    $(this).addClass('animated jello duration1  eds-on-hover');
},
function() {
  $(this).removeClass('animated jello duration1  eds-on-hover');
})

$('#shapely_home_contact-2 .mb32').hover(function() {
    $(this).addClass('animated jello duration1  eds-on-hover');
},
function() {
  $(this).removeClass('animated jello duration1  eds-on-hover');
})

//Transition content on scroll
$('#shapely_home_parallax-3 section img').addClass('animated bounceInLeft duration1 eds-on-scroll');
$('#shapely_home_parallax-3 section .col-md-4').addClass('animated bounceInRight duration1 eds-on-scroll');
$('#shapely_home_parallax-4 section img').addClass('animated bounceInDown duration1 eds-on-scroll');
$('#shapely_home_parallax-4 section .col-md-4').addClass('animated bounceInDown duration1 eds-on-scroll');
$('#shapely_home_contact-2 input[type="submit"]').addClass('btn btn-lg btn-filled');


});
