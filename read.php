<!DOCTYPE html>
<?php include ('includes/connect.php');?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="Grupo X">

  <title>Hyperzine - Chicago</title>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome-min.css" rel="stylesheet" type="text/css">
  <link href="css/read.css" rel="stylesheet" type="text/css">

  <!-- Bibliotecas -->
  <script src="functions/XMLWriter-1.0.0.js"></script>
  <!-- folhas de JS -->
  <script src="functions/functions.js"></script>

  <!-- IE8 support for HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <nav id="read-nav">
    <a href="preview.php"><img class="read-nav-a"  width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-book-5-icon.png&r=255&g=255&b=255"/></a><br><br><br>
    <img class="read-nav-a" id="addCommentBtn" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-quote-13-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="starRating" href="#" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="editTextBtn" href="#" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-font-size-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="addMediaBtn" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="helpIcon" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-help-icon.png&r=255&g=255&b=255"/><br><br><br>
  </nav>
  <div id="navBtn">
    <img class="read-nav-a" id="navBtnImg" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-menu-icon.png&r=0&g=0&b=0"/><br>
  </div>


  <div id="popInst" class="open">
    <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1><b>You can edit the content of the book you're reading! :)</b></h1><br><br>
    <p>Click on <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-menu-icon.png&r=255&g=255&b=255"/> to open the menu</p></br>
    <p><img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-book-5-icon.png&r=255&g=255&b=255"/> to return to the book preview</p></br>
    <p>To comment on that amazing part of the book, just click <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-quote-13-icon.png&r=255&g=255&b=255"></p></br>
    <p>Rate the book! <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255"></p></br>
    <p>Click on <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-font-size-icon.png&r=255&g=255&b=255"> to format the text at your choice</p></br>
    <p>Choose <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=255&g=255&b=255"> to add a video, image or audio to the story</p></br>
    <p>And finally click on any part of the text to complement the book, to write a plot twist and even to create new characters.</p></br></br></br>
    <p><b>Have fun!</b></p>
  </div>

  <!-- Texto do Livro -->
  <div id="read-text">
    <div id="read-text-editable" class="editavel"></div>
    <p contenteditable="true">Mr. And Mrs. Dursley, of number four, <a class="word-link">Privet Drive</a>, were proud to say that they were perfectly normal, thank you very much. They were the last people you'd expect to be involved in anything strange ormysterious, because they just didn't hold with such nonsense.<br><br> Mr. Dursley was the director of a firm called Grunnings, which made drills. He was a big, beefy man withhardly any neck, although he did have a very large mustache. Mrs. Dursley was thin and blonde and hadnearly twice the usual amount of neck, which came in very useful as she spent so much of her time craningover garden fences, spying on the neighbors. The Dursleys had a small son called Dudley and in theiropinion there was no finer boy anywhere. <br><br>The Dursleys had everything they wanted, but they also had a secret, and their greatest fear was thatsomebody would discover it. They didn't think they could bear it if anyone found out about the Potters. Mrs. Potter was Mrs. Dursley's sister, but they hadn't met for several years; in fact, Mrs. Dursley pretendedshe didn't have a sister, because her sister and her good-for-nothing husband were as unDursleyish as itwas possible to be. The Dursleys shuddered to think what the neighbors would say if the Potters arrived inthe street. The Dursleys knew that the Potters had a small son, too, but they had never even seen him. Thisboy was another good reason for keeping the Potters away; they didn't want Dudley mixing with a child like that.<br><br> When Mr. And Mrs. Dursley woke up on the dull, gray Tuesday our story starts, there was nothing aboutthe cloudy sky outside to suggest that strange and mysterious things would soon be happening all over thecountry. Mr. Dursley hummed as he picked out his most boring tie for work, and Mrs. Dursley gossipedaway happily as she wrestled a screaming Dudley into his high chair. <br><br>None of them noticed a large, tawny owl flutter past the window. <br><br>At half past eight, Mr. Dursley picked up his briefcase, pecked Mrs. Dursley on the cheek, and tried to kissDudley good-bye but missed, because Dudley was now having a tantrum and throwing his cereal at thewalls. "Little tyke, " chortled Mr. Dursley as he left the house. He got into his car and backed out of numberfour's drive. It was on the corner of the street that he noticed the first sign of something peculiar -- a cat reading amap. For a second, Mr. Dursley didn't realize what he had seen -- then he jerked his head around to look again. There was a tabby cat standing on the corner of Privet Drive, but there wasn't a map in sight. What could he have been thinking of? It must have been a trick of the light. Mr. Dursley blinked and stared at the cat. It stared back. As Mr. Dursley drove around the corner and up the road, he watched the cat in his mirror. It was now reading the sign that said Privet Drive -- no, looking at the sign; cats couldn't read maps or signs. Mr. Dursley gave himself a little shake and put the cat out of his mind. As he drove toward townhe thought of nothing except a large order of drills he was hoping to get that day.<br><br> But on the edge of town, drills were driven out of his mind by something else. As he sat in the usualmorning traffic jam, he couldn't help noticing that there seemed to be a lot of strangely dressed peopleabout. People in cloaks. Mr. Dursley couldn't bear people who dressed in funny clothes -- the getups you saw on young people!</p>
  </div>
  <input type="button" value="Adicionar" id="inputImage" onclick="document.getElementById('read-text-editable').focus(); pasteHtmlAtCaret('<img src=' + 'uploads/porco.png' +'>');">
  <input type="button" value="Adicionar" id="inputVideo" onclick="document.getElementById('read-text-editable').focus(); pasteHtmlAtCaret('<iframe width='560' height='315' src=' + '//www.youtube.com/embed/gOfvs9M_XDo?rel=0' +  'frameborder='0' allowfullscreen></iframe>');">
  <!--  <div id="commentsWritten">
  <p> </p>
</div>-->

<div class="addPops" id="addComment">
  <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
  <h1 style="font-family: Bold;">Escrever Comentário</h1></br>
  <textarea name="commentArea" style="width:98%; height:300px; background-color:white;" id="commentArea"></textarea><br><br>
  <input type="submit" id="commentBtn" value="Enviar" style="background-color:white; padding:10px; font-family: Bold;">
</div>


<div id="addMedia">
  <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
  <h1 style="font-family: Bold;">Escolher Media</h1>
  <img id="addImageBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-picture-icon.png&r=255&g=255&b=255"/><br>
  <img id="addVideoBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-video-icon.png&r=255&g=255&b=255"/><br>
  <img id="addMusicBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-audio-7-icon.png&r=255&g=255&b=255"/><br>
</div>

<div class="addPops" id="editText">
  <img class="exitBtn" style="float:right;" width="10px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
  <h1 style="font-family: Bold;">Formatar Texto</h1>
  <img id="editTextPlus" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-2-icon.png&r=255&g=255&b=255"/>
  <img id="editTextMinus" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-minus-2-icon.png&r=255&g=255&b=255"/>
  <img id="editTextContrast" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-brightness-9-icon.png&r=255&g=255&b=255"/>
</div>
<!--

<div class="addPops" id="addMedia">
  <form action="">
    <p>Adicionar Video</p></br>
    Selecionar Ficheiro: <input type="file" name="image" accept="image/*"><br><br>
    <button style="color:white;background-color:pink; width:100px; height: 50px;"  id="imageBtn" value="Video"></button>
  </form>
</div>
<div class="addPops" id="addImage2">
  <form  id="form" name="form">
    <h1 style="font-family:Bold;">Escolher Imagem</h1></br>
    Selecionar Ficheiro: <input type="file" id="imgFile" accept="image/*" ><br><br>
    <input id="addImageBtn2" type="submit" style="background-color:white; padding:10px; font-family: Bold;">
  </form>
</div>
-->

<!--


  <?php
  if(isset($_POST['submit'])){
    $filename =  $_FILES["imgFile"]["name"];
    if ((($_FILES["imgFile"]["type"] == "image/gif") || ($_FILES["imgFile"]["type"] == "image/jpeg") || ($_FILES["imgFile"]["type"] == "image/png")  || ($_FILES["imgFile"]["type"] == "image/pjpeg")) && ($_FILES["imgFile"]["size"] < 200000)){
      if(file_exists($_FILES["imgFile"]["name"])){
        echo "File name exists.";
      } else {
        move_uploaded_file($_FILES["imgFile"]["tmp_name"],"uploads/$filename");
        echo "Upload Successful. <a href='uploads/$filename'>Click here</a> to view the uploaded image";
      }
    } else {
      echo "invalid file.";
    }
  }
?>

<div id="addFilm">
<form action="">
<p>Adicionar Video</p></br>
Selecionar Ficheiro: <input type="file" name="video" accept="video/*"><br><br>
<input type="submit" id="filmBtn" value="Video">
</form>
</div>

<div id="addMusic">
<form action="">
<p>Adicionar Áudio</p></br>
Selecionar Ficheiro: <input type="file" name="imagem" accept="audio/*"><br><br>
<input type="submit" id="completeBtn" value="Adicionar">
</form>
</div>

<div id="addText">
<p>Complementar História</p></br>
<textarea rows="12" cols="115" id="complementArea"></textarea><br><br>
<input type="submit" class="completeBtn" value="Enviar">
</div>
-->
<div id="pageNumber">
  <p style="float:right;">2</p>
</div>

<!-- Javascript at the bottom -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- for testing -->
<script type="text/javascript" src="js/main.js"></script>

<script>
navBtn = document.getElementById('navBtn'),
readNav = document.getElementById('read-nav'),
editText = document.getElementById('editText'),
helpIcon = document.getElementById('helpIcon');

var fontSize = parseInt($("body").css("font-size"));

$(navBtn).click(function(){
  if ($(navBtn).hasClass("open")){
    $(readNav).removeClass("open");
    $(navBtn).removeClass("open");
  } else {
    $(readNav).addClass("open");
    $(navBtn).addClass("open");
  }
});

$('.exitBtn').click(function(){
  $(popInst).removeClass("open");
  $('#addComment').removeClass("open");
  $('#addMedia').removeClass("open");
  $('#editText').removeClass("open");
});

$(helpIcon).click(function(){
  $(popInst).addClass("open");
});

$('#addMediaBtn').click(function(){
  if ($('#addMedia').hasClass("open")){
    $('#addMedia').removeClass("open");
  } else {
    $('#addMedia').addClass("open");
  }
});

$('#addImageBtn').click(function(){
  $('#inputImage').addClass("open");
  $('#inputVideo').removeClass("open");
  $('#addMedia').removeClass("open");
  $(popInst).removeClass("open");

});

$('#addVideoBtn').click(function(){
  $('#inputVideo').addClass("open");
  $('#inputImage').removeClass("open");
  $('#addMedia').removeClass("open");
  $(popInst).removeClass("open");

});

$('#editTextBtn').click(function(){
  if ($('#editText').hasClass("open")){
    $('#editText').removeClass("open");
  } else {
    $('#editText').addClass("open");
  }
});

$('#editTextPlus').click(function(){
  fontSize += 1;
  $('#read-text p').css('font-size', fontSize+"px");
  return false;
});

$('#editTextMinus').click(function(){
  fontSize -= 1;
  $('#read-text p').css('font-size', fontSize+"px");
  return false;
});

$('#editTextContrast').click(function(){
  if ($('#read-text').hasClass("open")){
    $('#read-text').removeClass("open");
    $('body').css("background-color","white");
    $('#read-text p').css("color","black");
    $('#read-text a').css("color","black");
  } else {
    $('#read-text').addClass("open");
    $('body').css("background-color","black");
    $('#read-text p').css("color","white");
    $('#read-text a').css("color","white");
    $('#navBtn').css("background-color", "white");
    $('#addPops').css("background-color", "white");
  }
});

function pasteHtmlAtCaret(html) {
  var sel, range;
  if (window.getSelection) {

    // IE9 and non-IE
    sel = window.getSelection();
    if (sel.getRangeAt && sel.rangeCount) {
      range = sel.getRangeAt(0);
      range.deleteContents();

      // Range.createContextualFragment() would be useful here but is
      // non-standard and not supported in all browsers (IE9, for one)
      var el = document.createElement("div");
      el.innerHTML = html;
      var frag = document.createDocumentFragment(), node, lastNode;
      while ( (node = el.firstChild) ) {
        lastNode = frag.appendChild(node);
      }
      range.insertNode(frag);

      // Preserve the selection
      if (lastNode) {
        range = range.cloneRange();
        range.setStartAfter(lastNode);
        range.collapse(true);
        sel.removeAllRanges();
        sel.addRange(range);
      }
    }
  } else if (document.selection && document.selection.type != "Control") {
    // IE < 9
    document.selection.createRange().pasteHTML(html);
  }
}

/*
$('#addImageBtn').click(function(){
  if ($('#addImage').hasClass("open")){
    $('#addImage').removeClass("open");
  } else {
    $('#addImage').addClass("open");
  }
});


$('#addImageBtn2').click(function(){
  if ($('#addImage').hasClass("open")){
    $('#addImage').removeClass("open");
  } else {
    $('#addImage').addClass("open");
  }
});


$( "#read-text-editable" ).click(divClicked);
//função para o click e não click
function divClicked() {
  var editableText = $("<textarea />");
  editableText.val($(this).html());
  $(this).replaceWith(editableText);
  editableText.focus();
  editableText.blur(editableTextBlurred);
}

function editableTextBlurred() {
  // Preserve the value of textarea
  var html = $(this).val();
  // create a dynamic div
  var viewableText = $("<div id='read-text-editable'> ");
  // set it's html
  viewableText.html(html);
  // replace out the textarea
  $(this).replaceWith(viewableText);
}




$('#addCommentBtn').click(function(){
  if ($('#addComment').hasClass("open")){
    $('#addComment').removeClass("open");
  } else {
    $('#addComment').addClass("open");
  }
});

$('#addMediaBtn').click(function(){
  if ($('#addMedia').hasClass("open")){
    $('#addMedia').removeClass("open");
  } else {
    $('#addMedia').addClass("open");
  }
});

$('#addImageBtn').click(function(){
  if ($('#addImage').hasClass("open")){
    $('#addImage').removeClass("open");
  } else {
    $('#addImage').addClass("open");
  }
});

/*
$('#editTextBtn').click(function(){
  if ($('#editText').hasClass("open")){
    $('#editText').removeClass("open");
  } else {
    $('#editText').addClass("open");
  }
});

$('#editTextPlus').click(function(){
  fontSize += 1;
  $('#read-text p').css('font-size', fontSize+"px");
  return false;
});

$('#editTextMinus').click(function(){
  fontSize -= 1;
  $('#read-text p').css('font-size', fontSize+"px");
  return false;
});

$('#editTextContrast').click(function(){
  if ($('#read-text').hasClass("open")){
    $('#read-text').removeClass("open");
    $('body').css("background-color","white");
    $('#read-text p').css("color","black");
    $('#read-text a').css("color","black");
  } else {
    $('#read-text').addClass("open");
    $('body').css("background-color","black");
    $('#read-text p').css("color","white");
    $('#read-text a').css("color","white");
    $('#navBtn').css("background-color", "white");
    $('#addPops').css("background-color", "white");
  }
});

/*
$('#commentBtn').click(function(){
$('#addComment').removeClass("open");
$('#commentsWritten p').append("<p>"+$("#commentArea").val()+"<p>"+"<p>@sergiomrebelo</p>");
});*/

/*var fontSize = parseInt($("body").css("font-size"));

$(editText).click(function(){
if ($(showText).hasClass("open")){
$(showText).removeClass("open");
} else {
$(showText).addClass("open");
}
});

$('#starRating').click(function(){
if($('.rate-text-pop').hasClass("open")){
$('.rate-text-pop').removeClass("open");
$('.rate-text-pop').css("display", "none");
$('#read-nav').animate({width:"27%"});
$('#rateText').removeClass('fa fa-star-o');
$('#rateText').addClass('fa fa-star');
} else {
$('.rate-text-pop').addClass("open");
$('.edit-text-pop').removeClass("open");
$('.edit-text-pop').css("display", "none");
$('.rate-text-pop').css("display", "inline");
$('#read-nav').animate({width:"38%"});
$('#rateText').removeClass('fa fa-star');
$('#rateText').addClass('fa fa-star-o');
$('#rateText2').removeClass('fa fa-star');
$('#rateText2').addClass('fa fa-star-o');
$('#rateText3').removeClass('fa fa-star');
$('#rateText3').addClass('fa fa-star-o');
$('#rateText4').removeClass('fa fa-star');
$('#rateText4').addClass('fa fa-star-o');
$('#rateText5').removeClass('fa fa-star');
$('#rateText5').addClass('fa fa-star-o');  }
});

$('#rateText2').click(function(){
$('#rateText').removeClass('fa fa-star-o');
$('#rateText').addClass('fa fa-star');
$('#rateText2').removeClass('fa fa-star-o');
$('#rateText2').addClass('fa fa-star');
});

$('#rateText3').click(function(){
$('#rateText').removeClass('fa fa-star-o');
$('#rateText').addClass('fa fa-star');
$('#rateText2').removeClass('fa fa-star-o');
$('#rateText2').addClass('fa fa-star');
$('#rateText3').removeClass('fa fa-star-o');
$('#rateText3').addClass('fa fa-star');
});

$('#rateText4').click(function(){
$('#rateText').removeClass('fa fa-star-o');
$('#rateText').addClass('fa fa-star');
$('#rateText2').removeClass('fa fa-star-o');
$('#rateText2').addClass('fa fa-star');
$('#rateText3').removeClass('fa fa-star-o');
$('#rateText3').addClass('fa fa-star');
$('#rateText4').removeClass('fa fa-star-o');
$('#rateText4').addClass('fa fa-star');
});

$('#rateText5').click(function(){
$('#rateText').removeClass('fa fa-star-o');
$('#rateText').addClass('fa fa-star');
$('#rateText2').removeClass('fa fa-star-o');
$('#rateText2').addClass('fa fa-star');
$('#rateText3').removeClass('fa fa-star-o');
$('#rateText3').addClass('fa fa-star');
$('#rateText4').removeClass('fa fa-star-o');
$('#rateText4').addClass('fa fa-star');
$('#rateText5').removeClass('fa fa-star-o');
$('#rateText5').addClass('fa fa-star');
});

$('#editText').click(function(){
if($('.edit-text-pop').hasClass("open")){
$('.edit-text-pop').removeClass("open");
$('.edit-text-pop').css("display", "none");
$('#read-nav').animate({width:"27%"});
} else {
$('.edit-text-pop').addClass("open");
$('.edit-text-pop').css("display", "inline");
$('#read-nav').animate({width:"32%"});
$('.rate-text-pop').removeClass("open");
$('.rate-text-pop').css("display", "none");
}
});

$('#editTextPlus').click(function(){
fontSize += 1;
$('#read-text p').css('font-size', fontSize+"px");
return false;
});

$('#editTextMinus').click(function(){
fontSize -= 1;
$('#read-text p').css('font-size', fontSize+"px");
return false;
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



$("#imageBtn").click(function(){
$('#addImage').removeClass("open");
$('#read-text-image').addClass("open");
return false;
});

$('#filmBtn').click(function(){
$('#addFilm').removeClass("open");
$('#read-text-video').addClass("open");
return false;
});

$('#read-text-image').click(function(){
$('#read-text-image').removeClass("open");
});

$('#read-text-video').click(function(){
$('#read-text-video').removeClass("open");
});

$('#commentsWritten').click(function(){
$('#commentsWritten p').remove();
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
});*/

</script>
</body>
</html>
