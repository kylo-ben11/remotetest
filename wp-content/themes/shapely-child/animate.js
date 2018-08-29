$(document).ready(function(){

  $("#porg").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("porg");
  })
  $("#leiaorgana").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("leiaorgana");
  })
  $("#finn").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("finn");
  })
  $("#kyloren").click(function(){
    $("#animateMe").removeClass();
    $("#animateMe").addClass("kyloren");
  })

  setInterval(function(){
    $("#animateMe").toggleClass("glimmer");
  }, 3000);

});
