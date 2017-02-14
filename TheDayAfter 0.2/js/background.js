$(document).ready(function() {
    $("#volgende1").show();
    $(".part1").show();
    $("#volgende2").hide();
    $("#verstuur").hide();
    $(".part2").hide();
    $(".part3").hide();
    $(".part4").hide();
    $("#volgende1").click(show1);
    $("#volgende2").click(show2);
    $("#volgende3").click(show3);

});


function show1() {
  $(".part1").hide();
  $("#volgende1").hide();
  $(".part2").show();
  $("#volgende2").show();
}

function show2() {
  $(".part2").hide();
  $("#volgende2").hide();
  $(".part3").show();
  $("#verstuur").show();
}



