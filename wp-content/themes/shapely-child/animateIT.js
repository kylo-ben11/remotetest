$(document).ready(function(){

//Animate Parallax Buttons
$('.top-parallax-section > div > a').hover(function() {
    $(this).addClass('animated rubberBand duration2  eds-on-hover');
},
function() {
  $(this).removeClass('animated rubberBand duration2  eds-on-hover');
})

$('#shapely_home_parallax-3 a').hover(function() {
    $(this).addClass('animated rubberBand duration2  eds-on-hover');
},
function() {
  $(this).removeClass('animated rubberBand duration2  eds-on-hover');
})

$('#shapely_home_parallax-4 a').hover(function() {
    $(this).addClass('animated rubberBand duration2  eds-on-hover');
},
function() {
  $(this).removeClass('animated rubberBand duration2  eds-on-hover');
})

//Animate Nav and Contact Buttons
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

//Smooth scrolling Buttons
$("#shapely_home_parallax-2 a:nth-child(4)").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_contact-2").offset().top -103
    }, 3500);
});

$("#shapely_home_parallax-2 a:nth-child(3)").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_parallax-5").offset().top -103
    }, 3500);
});

$("#shapely_home_parallax-3 a").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_contact-2").offset().top -103
    }, 2500);
});

$("#shapely_home_parallax-4 a").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_contact-2").offset().top -103
    }, 2500);
});

$("#shapely_home_parallax-5 a").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_contact-2").offset().top -103
    }, 1500);
});

$("#menu-item-91 a").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#shapely_home_contact-2").offset().top -103
    }, 4000);
});

});
