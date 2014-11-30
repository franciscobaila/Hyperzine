<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="Grupo X">

  <title>Hyperzine</title>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome-min.css" rel="stylesheet" type="text/css">
  <link href="css/read.css" rel="stylesheet" type="text/css">

  <!-- IE8 support for HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body id="read">

  <nav id="read-nav">
    <button href="#" class="read-nav-a"><span class="fa fa-arrow-left"></span></button>
    <button href="#" class="read-nav-a"><span class="fa fa-pencil"></span></button>
    <button href="#" class="read-nav-a"><span class="fa fa-star"></span></button>
    <button href="#" class="read-nav-a" id="editText"><span class="fa fa-font"></span></button>

    <button class="word-link-pop read-nav-a" id="word-link-pop-comment"><span class="fa fa-comment"></span></button>
    <button class="word-link-pop read-nav-a" id="word-link-pop-image"><span class="fa fa-image"></span></button>
    <button class="word-link-pop read-nav-a" id="word-link-pop-film"><span class="fa fa-film"></span></button>
    <button class="word-link-pop read-nav-a" id="word-link-pop-music"><span class="fa fa-music"></span></button>
    <button class="word-link-pop read-nav-a" id="word-link-pop-text"><span class="fa fa-file-text-o"></span></button>
  </nav>

  <!-- Título do Livro -->
  <div id="read-title" href="#"><p id="read-title-title">O Namorado Do Papai Ronca</p><p id="read-title-author">por Plínio Camillo</p></div>

  <!-- Texto do Livro -->
  <div id="read-text" >
    <p>Bacon ipsum dolor amet <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey <a href="#" class="word-link">turkey</a> turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey <a href="#" class="word-link">turkey</a>. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. </p>

    <p>Bacon ipsum dolor amet <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey.</p>

    <p>Bacon ipsum dolor amet <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey turkey turkey <a href="#" class="word-link">turkey</a> turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey <a href="#" class="word-link">turkey</a> turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey.</p>

    <div id="addImage">
      <p>OI</p>
    </div>

    <p>Bacon ipsum dolor amet <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey <a href="#" class="word-link">turkey</a>, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey <a href="#" class="word-link">turkey</a> turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey <a href="#" class="word-link">turkey</a> turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. </p>

    <p>Bacon ipsum dolor amet <a href="#" class="word-link">turkey</a> turkey turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey <a href="#" class="word-link">turkey</a>, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey <a href="#" class="word-link">turkey</a> turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey <a href="#" class="word-link">turkey</a> turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. Turkey turkey turkey turkey. Turkey turkey turkey turkey turkey. Turkey turkey turkey turkey turkey, turkey turkey. Turkey turkey turkey, turkey turkey turkey turkey turkey turkey turkey turkey turkey. </p>

  </div>

  <div id="commentsWritten">
    <p> </p>
  </div>

  <div id="addComment">
    <p>Escrever Comentário</p></br>
    <input type="text" style="width:98%; height:160px;" id="commentArea"><br><br>
    <input type="submit" class="completeBtn" value="Comentar">
  </div>

  <div id="addImage">
    <form action="">
    <p>Adicionar Imagem</p></br>
    Selecionar Ficheiro: <input type="file" name="imagem" accept="image/*"><br><br>
    <input type="submit" class="completeBtn" value="Adicionar">
  </form>
  </div>

  <div id="addFilm">
    <form action="">
      <p>Adicionar Video</p></br>
      Selecionar Ficheiro: <input type="file" name="imagem" accept="video/*"><br><br>
      <input type="submit" class="completeBtn" value="Adicionar">
    </form>
  </div>

  <div id="addMusic">
    <form action="">
      <p>Adicionar Áudio</p></br>
      Selecionar Ficheiro: <input type="file" name="imagem" accept="audio/*"><br><br>
      <input type="submit" class="completeBtn" value="Adicionar">
    </form>
  </div>

  <div id="addText">
    <p>Complementar História</p></br>
    <textarea rows="12" cols="115" id="complementArea"></textarea><br><br>
    <input type="submit" class="completeBtn" value="Enviar">
  </div>

  <div id="pageNumber">
      <br><br><br><br>
      <p>2</p>
  </div>

  <?php
  include('includes/footer.php');
  ?>

  <script>
  editText = document.getElementById('editText'),
  showText = document.getElementById( 'read-nav-subnav-font'),
  popText = document.getElementById( 'word-link-pop' ),

  $(editText).click(function(){
    if ($(showText).hasClass("open")){
      $(showText).removeClass("open");
    } else {
      $(showText).addClass("open");
    }
  });

  $(".word-link").click(function() {
      $("#read-nav").addClass("open");
  });

  $('#word-link-pop-comment').click(function(){
    if ($('#addComment').hasClass("open")){
      $('#addComment').removeClass("open");
      $('#read-nav').removeClass("open");
    } else {
      $('#addComment').addClass("open");
      $('#addImage').removeClass("open");
      $('#addMusic').removeClass("open");
      $('#addFilm').removeClass("open");
      $('#addText').removeClass("open");
    }
  });

  $('.completeBtn').click(function(){
      $('#addComment').removeClass("open");
      $('#addImage').removeClass("open");
      $('#addFilm').removeClass("open");
      $('#addMusic').removeClass("open");
      $('#addText').removeClass("open");

      $('#commentsWritten p').append("<p>"+$("input:text").val()+"<p>"+"<p>@sergiorebelo</p>");
    });

  $('#word-link-pop-image').click(function(){
    if ($('#addImage').hasClass("open")){
      $('#addImage').removeClass("open");
    } else {
      $('#addImage').addClass("open");
      $('#addComment').removeClass("open");
      $('#addFilm').removeClass("open");
      $('#addMusic').removeClass("open");
      $('#addText').removeClass("open");
    }
  });

  $('#word-link-pop-film').click(function(){
    if ($('#addFilm').hasClass("open")){
      $('#addFilm').removeClass("open");
    } else {
      $('#addFilm').addClass("open");
      $('#addComment').removeClass("open");
      $('#addImage').removeClass("open");
      $('#addMusic').removeClass("open");
      $('#addText').removeClass("open");
    }
  });

  $('#word-link-pop-music').click(function(){
    if ($('#addMusic').hasClass("open")){
      $('#addMusic').removeClass("open");
    } else {
      $('#addMusic').addClass("open");
      $('#addComment').removeClass("open");
      $('#addImage').removeClass("open");
      $('#addFilm').removeClass("open");
      $('#addText').removeClass("open");
    }
  });

  $('#word-link-pop-text').click(function(){
    if ($('#addText').hasClass("open")){
      $('#addText').removeClass("open");
    } else {
      $('#addText').addClass("open");
      $('#addComment').removeClass("open");
      $('#addImage').removeClass("open");
      $('#addFilm').removeClass("open");
      $('#addMusic').removeClass("open");
    }
  });


  $('#word-link-pop-exit').click(function(){
    $("#word-link-pop").removeClass("open");
  });

  </script>
</body>
</html>
