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
    $("#comments").fadeIn(300);
    $("#reviews").fadeOut(300);
  });
  $("#close-comments").click(function() {
    $("#comments").fadeOut(300);
  });

  $("#view-reviews").click(function() {
    $("#reviews").fadeIn(300);
    $("#comments").fadeOut(300);
  });
  $("#close-reviews").click(function() {
    $("#reviews").fadeOut(300);
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
  /* HEADER ---------------------*/
  $("#library-header").click(function() {
    window.location.href = "library.php";
  });
  $("#shelf-header").click(function() {
    window.location.href = "shelf.php";
  });
  $("#publish-header").click(function() {
    window.location.href = "publicar.php";
  });
  $("#logo").click(function() {
    window.location.href = "home.php";
  });
  $("#log-header").click(function() {
    window.location.href = "index.php";
  });
  $("#sign-up").click(function() {
    window.location.href = "index.php";
  });
  $("#log-in").click(function() {
    window.location.href = "login.php";
  });
  $("#review-header").click(function() {
    window.location.href = "create-review.php";
  });
}

app.review = function() {
  $("#message").fadeIn(600);
  setTimeout(function() {
    window.location.href = "preview.php";
  }, 700);
}

$(document).ready(function() {
  app.init();
  window.scrollTo(0,0);
})
