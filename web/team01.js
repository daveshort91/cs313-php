function clickAlert() {
  alert("Clicked!");
}

function changeColor() {
  var color_input = document.getElementById("color-text");
  var first_div = document.getElementById("first");
  var color = color_input.value;
  first_div.style.backgroundColor = color;
}

function changeColorJquery() {
  var color = $("#color-text").val();
  $("#first").css("background-color", color);
}

function toggleVisibility() {
  var big_div = $('#third');
  if(big_div.is(':visible')){
    $('#third').fadeOut(400);
  }
  else {
    $('#third').fadeIn(400);
  }
}
