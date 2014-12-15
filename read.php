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
    <a href="preview.php"><img id="read-arrow" class="read-nav-a"  width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-sort-5-icon.png&r=255&g=255&b=255"/></a><br><br><br>
    <img class="read-nav-a" id="addCommentBtn" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-quote-13-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="addRateBtn" href="#" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="editTextBtn" href="#" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-font-size-icon.png&r=255&g=255&b=255"/><br><br><br>
    <img class="read-nav-a" id="addMediaBtn" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=255&g=255&b=255"/><br><br><br>
    <a href="create-review.php"><img class="read-nav-a" id="addCritic" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-pen-12-icon.png&r=255&g=255&b=255"/></a><br><br><br>
    <img class="read-nav-a" id="helpIcon" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-help-icon.png&r=255&g=255&b=255"/><br><br><br>
  </nav>

  <div id="navBtn">
    <img class="read-nav-a" id="navBtnImg" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-menu-icon.png&r=0&g=0&b=0"/><br>
  </div>


  <div id="popInst" class="open">
    <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1><b>You can edit the content of the book you're reading! :)</b></h1><br><br>
    <p>Click on <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-menu-icon.png&r=255&g=255&b=255"/> to open the menu</p></br>
    <p><img id="read-arrow" width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-sort-5-icon.png&r=255&g=255&b=255"/> to return to the book preview</p></br>
    <p>To comment on that amazing part of the book, just click <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-quote-13-icon.png&r=255&g=255&b=255"></p></br>
    <p>Rate the book! <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255"></p></br>
    <p>Click on <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-font-size-icon.png&r=255&g=255&b=255"> to format the text at your choice</p></br>
    <p>Choose <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=255&g=255&b=255"> to add a video, image or audio to the story</p></br>
    <p>Click on <img width="20px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-pen-12-icon.png&r=255&g=255&b=255"> to write a review.</p></br>
    <p>And finally click on any part of the text to complement the book, to write a plot twist and even to create new characters.</p></br></br></br>
    <p><b>Have fun!</b></p>
  </div>

  <!-- Texto do Livro -->
  <div id="read-text">
    <div id="read-text-editable" class="editavel"></div>
    <p contenteditable="true">Mr. And Mrs. Dursley, of number four, <a class="word-link" href="read2.php"  contenteditable="false">Privet Drive</a>, were proud to say that they were perfectly normal, thank you very much. They were the last people you'd expect to be involved in anything strange ormysterious, because they just didn't hold with such nonsense.<br><br> Mr. Dursley was the director of a firm called Grunnings, which made drills. He was a big, beefy man withhardly any neck, although he did have a very large mustache. Mrs. Dursley was thin and blonde and hadnearly twice the usual amount of neck, which came in very useful as she spent so much of her time craningover garden fences, spying on the neighbors. The Dursleys had a small son called Dudley and in theiropinion there was no finer boy anywhere. <br><br>The Dursleys had everything they wanted, but they also had a secret, and their greatest fear was thatsomebody would discover it. They didn't think they could bear it if anyone found out about the Potters. Mrs. Potter was Mrs. Dursley's sister, but they hadn't met for several years; in fact, Mrs. Dursley pretendedshe didn't have a sister, because her sister and her good-for-nothing husband were as unDursleyish as itwas possible to be. The Dursleys shuddered to think what the neighbors would say if the Potters arrived inthe street. The Dursleys knew that the Potters had a small son, too, but they had never even seen him. Thisboy was another good reason for keeping the Potters away; they didn't want Dudley mixing with a child like that.<br><br> When Mr. And Mrs. Dursley woke up on the dull, gray Tuesday our story starts, there was nothing aboutthe cloudy sky outside to suggest that strange and mysterious things would soon be happening all over thecountry. Mr. Dursley hummed as he picked out his most boring tie for work, and Mrs. Dursley gossipedaway happily as she wrestled a screaming Dudley into his high chair. <br><br>None of them noticed a large, tawny owl flutter past the window. <br><br>At half past eight, Mr. Dursley picked up his briefcase, pecked Mrs. Dursley on the cheek, and tried to kissDudley good-bye but missed, because Dudley was now having a tantrum and throwing his cereal at thewalls. "Little tyke, " chortled Mr. Dursley as he left the house. He got into his car and backed out of numberfour's drive. It was on the corner of the street that he noticed the first sign of something peculiar -- a cat reading amap. For a second, Mr. Dursley didn't realize what he had seen -- then he jerked his head around to look again. There was a tabby cat standing on the corner of Privet Drive, but there wasn't a map in sight. What could he have been thinking of? It must have been a trick of the light. Mr. Dursley blinked and stared at the cat. It stared back. As Mr. Dursley drove around the corner and up the road, he watched the cat in his mirror. It was now reading the sign that said Privet Drive -- no, looking at the sign; cats couldn't read maps or signs. Mr. Dursley gave himself a little shake and put the cat out of his mind. As he drove toward townhe thought of nothing except a large order of drills he was hoping to get that day.<br><br> But on the edge of town, drills were driven out of his mind by something else. As he sat in the usualmorning traffic jam, he couldn't help noticing that there seemed to be a lot of strangely dressed peopleabout. People in cloaks. Mr. Dursley couldn't bear people who dressed in funny clothes -- the getups you saw on young people!</p>
  </div>
  <input type="button" value="Adicionar" id="inputImage" onclick="document.getElementById('read-text-editable').focus(); pasteHtmlAtCaret('<img src=' + 'uploads/porco.png' +'>');">
  <input type="button" value="Adicionar" id="inputVideo" onclick="document.getElementById('read-text-editable').focus(); pasteHtmlAtCaret('<iframe width='560' height='315' src=' + '//www.youtube.com/embed/gOfvs9M_XDo?rel=0' +  'frameborder='0' allowfullscreen></iframe>');">

  <div class="addPops" id="addRate" style="height: 150px;">
    <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1 style="font-family: Bold;">Rate</h1>
    <div id="stars" style="margin-left: 17%; padding-top: 50px">
    <img id="starRate1" width="50px" style="display: inline;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255"/>
    <img id="starRate2" width="50px" style="display: inline;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255"/>
    <img id="starRate3" width="50px" style="display: inline;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255"/>
    <img id="starRate4" width="50px" style="display: inline;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255"/>
    <img id="starRate5" width="50px" style="display: inline;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255"/>
  </div>
  </div>

  <div class="addPops" id="addMedia">
    <img class="exitBtn" style="float:right;" width="10px" style="padding: 0 5px;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1 style="font-family: Bold;">Choose Media</h1>
    <img id="addImageBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-picture-icon.png&r=255&g=255&b=255"/><br>
    <img id="addVideoBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-video-icon.png&r=255&g=255&b=255"/><br>
    <img id="addMusicBtn" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-audio-7-icon.png&r=255&g=255&b=255"/><br>
  </div>

  <div class="addPops" id="editText">
    <img class="exitBtn" style="float:right;" width="10px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1 style="font-family: Bold;">Format Text</h1>
    <img id="editTextPlus" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-2-icon.png&r=255&g=255&b=255"/>
    <img id="editTextMinus" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-minus-2-icon.png&r=255&g=255&b=255"/>
    <img id="editTextContrast" width="80px" style="display:block; padding: 15px; margin-left: auto; margin-right: auto;"  src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-brightness-9-icon.png&r=255&g=255&b=255"/>
  </div>

  <div class="addPops" id="editComment">
    <img class="exitBtn" style="float:right;" width="10px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-x-mark-icon.png&r=255&g=255&b=255"/>
    <h1 style="font-family: Bold;">Add Comment</h1>
    <div id="write-comment">
      <textarea class="comment-textarea" placeholder="Write your review"></textarea>
    </div>
    <div class="comment-submit">
      <b>Submit</b>
    </div>
    <div id="lol">
      Comment added with success.
    </div>
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
    $('#addRate').removeClass("open");
    $('#editText').removeClass("open");
    $('#editComment').removeClass("open");
  });

  $(helpIcon).click(function(){
    if ($(popInst).hasClass("open")){
      $(popInst).removeClass("open");
      $('#addComment').removeClass("open");
      $('#addMedia').removeClass("open");
      $('#addRate').removeClass("open");
      $('#editText').removeClass("open");
      $('#editComment').removeClass("open");
    } else {
    $(popInst).addClass("open");
    $('#addComment').removeClass("open");
    $('#addMedia').removeClass("open");
    $('#addRate').removeClass("open");
    $('#editText').removeClass("open");
    $('#editComment').removeClass("open");
  }
  });

  $('#addMediaBtn').click(function(){
    if ($('#addMedia').hasClass("open")){
      $('#addMedia').removeClass("open");
    } else {
      $('#addMedia').addClass("open");
      $('#addRate').removeClass("open");
      $('#editText').removeClass("open");
      $(popInst).removeClass("open");
      $('#addComment').removeClass("open");
      $('#editComment').removeClass("open");
      }
  });

  $('#addRateBtn').click(function(){
    if ($('#addRate').hasClass("open")){
      $('#addRate').removeClass("open");
    } else {
      $('#addRate').addClass("open");
      $('#addMedia').removeClass("open");
      $('#editText').removeClass("open");
      $(popInst).removeClass("open");
      $('#addComment').removeClass("open");
      $('#editComment').removeClass("open");
    }
  });

  $('#addCommentBtn').click(function(){
    if ($('#editComment').hasClass("open")){
      $('#editComment').removeClass("open");
    } else {
      $('#editComment').addClass("open");
      $('#addMedia').removeClass("open");
      $('#editText').removeClass("open");
      $(popInst).removeClass("open");
      $('#addComment').removeClass("open");
      $('#addRate').removeClass("open");
    }
  });


  $('#addImageBtn').click(function(){
    if ($('#addImage').hasClass("open")){
      $('#addImage').removeClass("open");
    } else {
    $('#inputImage').addClass("open");
    $('#inputVideo').removeClass("open");
    $('#addMedia').removeClass("open");
    $(popInst).removeClass("open");
    $('#addRate').removeClass("open");
    $('#editComment').removeClass("open");
  }
  });

  $('#addVideoBtn').click(function(){
    $('#inputVideo').addClass("open");
    $('#inputImage').removeClass("open");
    $('#addMedia').removeClass("open");
    $(popInst).removeClass("open");
    $('#editComment').removeClass("open");

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

  $('#starRate1').click(function(){
    if ($('#starRate1').hasClass("open")){
      $('#starRate1').removeClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    } else {
      $('#starRate1').addClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    }
  });

  $('#starRate2').click(function(){
    if ($('#starRate2').hasClass("open")){
      $('#starRate2').removeClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    } else {
      $('#starRate2').addClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    }
  });

  $('#starRate3').click(function(){
    if ($('#starRate3').hasClass("open")){
      $('#starRate3').removeClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    } else {
      $('#starRate3').addClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    }
  });

  $('#starRate4').click(function(){
    if ($('#starRate4').hasClass("open")){
      $('#starRate4').removeClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    } else {
      $('#starRate4').addClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    }
  });

  $('#starRate5').click(function(){
    if ($('#starRate5').hasClass("open")){
      $('#starRate5').removeClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-5-icon.png&r=255&g=255&b=255');
    } else {
      $('#starRate5').addClass("open");
      $('#starRate1').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate2').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate3').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate4').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
      $('#starRate5').attr('src', 'http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-star-2-icon.png&r=255&g=255&b=255');
    }
  });

  $('.comment-submit').click(function(){
    $('#write-comment').fadeOut(300);
    $('#comment-submit').fadeOut(300);
    setTimeout(function() {
      $('#lol').fadeIn(100);
    }, 600);
    setTimeout(function() {
      $('#write-comment').fadeIn(300);
      $('#comment-submit').fadeIn(300);
      $('#lol').fadeOut(100);
    }, 1600);
  });


/*
  $('#starRate2').click(function(){
    if('#starRate2').hasClass(){
      $('#starRate2').removeClass();
      $('#starRate3').removeClass();
      $('#starRate4').removeClass();
      $('#starRate5').removeClass();
    } else {
      $('#starRate1').addClass();
      $('#starRate2').addClass();
      $('#starRate3').removeClass();
      $('#starRate4').removeClass();
      $('#starRate5').removeClass();
    }
  });
*/

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

</script>
</body>
</html>
