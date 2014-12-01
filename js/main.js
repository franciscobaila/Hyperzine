/* Main app*/
var app = {
}

app.init = function() {
  var self = this;
  app.events();
}

app.events = function() {
  /* PREVIEW PAGE ---------------------*/
  $("#view-comments").click(function() {
    $("#container").fadeOut(10);
    $("#comments").fadeIn(600);
  });
  $("#close-comments").click(function() {
    $("#comments").fadeOut(10);
    $("#container").fadeIn(600);
  });
  $("#close-preview").click(function() {
    window.location.href = "home.php";
  });
  /* ADD REVIEW PAGE ---------------------*/
  $("#view-reviews").click(function() {
    $("#container").fadeOut(10);
    $("#reviews").fadeIn(600);
  });
  $("#close-reviews").click(function() {
    $("#reviews").fadeOut(10);
    $("#container").fadeIn(600);
  });
  $(".img-book").click(function() {
    window.location.href = "read.php";
  });
  $("#read").click(function() {
    window.location.href = "read.php";
  });
  $("#interaction").click(function() {
    window.location.href = "read.php";
  });
  /* HOME PAGE ---------------------*/
  $(".book").click(function() {
    window.location.href = "preview.php";
  });
  /* LIBRARY PAGE ---------------------*/
  $("#filters :checkbox").click(function() {
    $(".book").hide();
    $("#filters :checkbox:checked").each(function() {
      $("." + $(this).val()).show();
    });
  });
  /* SHELF PAGE ---------------------*/
  $("#filters2 :checkbox").click(function() {
    $(".book").hide();
    $("#filters2 :checkbox:checked").each(function() {
      $("." + $(this).val()).show();
    });
  });
  $("#filters3 :checkbox").click(function() {
    $(".book").hide();
    $("#filters3 :checkbox:checked").each(function() {
      $("." + $(this).val()).show();
    });
  });
}

app.review = function() {
  $("#container").fadeOut(10);
  $("#message").fadeIn(600);
  setTimeout(function() {
    window.location.href = "preview.php";
  }, 500);
}

$(document).ready(function() {
  app.init();
  window.scrollTo(0,0);
})
