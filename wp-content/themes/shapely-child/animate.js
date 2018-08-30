$(document).ready(function(){

  $("#kyloren").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("kyloren");
  })
  $("#darthvader").click(function(){
		$("#animateMe").removeClass();
		$("#animateMe").addClass("darthvader");
	})
  $("#stormtrooper").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("stormtrooper");
  })
  $("#bobafett").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("bobafett");
  })
  $("#darthmaul").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("darthmaul");
  })
  $("#r2d2").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("r2d2");
  })
  $("#yoda").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("yoda");
  })
  $("#chewbacca").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("chewbacca");
  })
  setInterval(function(){
    $("#animateMe").toggleClass("glimmer");
  }, 3000);



});
