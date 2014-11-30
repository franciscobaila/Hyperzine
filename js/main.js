/* Main app*/
var app = {
}

app.init = function() {
  var self = this;
  app.events();
}

app.events = function() {
  $("#view-comments").click(function() {
    $("#container").fadeOut(10);
    $("#comments").fadeIn(600);
  });
  $("#close-comments").click(function() {
    $("#comments").fadeOut(10);
    $("#container").fadeIn(600);
  });

  $("#view-reviews").click(function() {
    $("#container").fadeOut(10);
    $("#reviews").fadeIn(600);
  });
  $("#close-reviews").click(function() {
    $("#reviews").fadeOut(10);
    $("#container").fadeIn(600);
  });
}

$(document).ready(function() {
  app.init();
  app.setScroll();
  window.scrollTo(0,0);
})
