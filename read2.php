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


  <div id="popInst" class="open" style="display:none;">
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
    <audio controls>
      <source src="audio/musica.mp3" type="audio/mpeg"><br><br>
      </audio>
    <p contenteditable="true">He supposed this was some stupid new fashion. He drummed his fingers on thesteering wheel and his eyes fell on a huddle of these weirdos standing quite close by. They were whispering excitedly together. Mr. Dursley was enraged to see that a couple of them weren't young at all; why, thatman had to be older than he was, and wearing an emerald-green cloak! The nerve of him! <br><br> But then itstruck Mr.Dursley that this was probably some silly stunt -- these people were obviously collecting forsomething... Yes, that would be it. The traffic moved on and a few minutes later, Mr. Dursley arrived in the Grunnings parking lot, his mind back on drills. Mr. Dursley always sat with his back to the window in his office on the ninth floor. If he hadn't, he mighthave found it harder to concentrate on drills that morning. He didn't see the owls swoop ing past in broaddaylight, though people down in the street did; they pointed and gazed openmouthed as owl after owlsped overhead. Most of them had never seen an owl even at nighttime. Mr. Dursley, however, had aperfectly normal, owl-free morning. He yelled at five different people. He made several important telephone calls and shouted a bit more. He was in a very good mood until lunchtime, when he thought he'd stretch his legs and walk across the road to buy himself a bun from the bakery. <br><br> He'd forgotten all about the people in cloaks until he passed a group of them next to the baker's. He eyedthem angrily as he passed. He didn't know why, but they made him uneasy. This bunch were whisperingexcitedly, too, and he couldn't see a single collecting tin. It was on his way back past them, clutching a largedoughnut in a bag, that he caught a few words of what they were saying.<br><br> "<a href="read.php" contenteditable="false">The Potters</a>, that's right, that's what I heard yes, their son, Harry"Mr. Dursley stopped dead.<br><br>Fear flooded him. He looked back at the whisperers as if he wanted to saysomething to them, but thought better of it. He dashed back across the road, hurried up to his office, snapped at his secretary not to disturb him, seized his telephone, and had almost finished dialing his home number when he changed his mind. He putthe receiver back down and stroked his mustache, thinking... No, he was being stupid. Potter wasn't such an unusual name. He was sure there were lots of people called Potter who had a son called Harry. Come tothink of it, he wasn't even sure his nephew was called Harry. He'd never even seen the boy. It might have been Harvey. Or Harold. There was no point in worrying Mrs. Dursley; she always got so upset at anymention of her sister. He didn't blame her -- if he'd had a sister like that... But all the same, those people incloaks... He found it a lot harder to concentrate on drills that afternoon and when he left the building at fiveo'clock, he was still so worried that he walked straight into someone just outside the door.<br><br> "Sorry, " he grunted, as the tiny old man stumbled and almost fell. It was a few seconds before Mr. Dursley realized that the man was wearing a violet cloak. He didn't seem at all upset at being almostknocked to the ground. On the contrary, his face split into a wide smile and he said in a squeaky voice thatmade passersby stare, "Don't be sorry, my dear sir, for nothing could upset me today! Rejoice, for You-Know-Who has gone at last! Even Muggles like yourself should be celebrating, this happy, happy day!"And the old man hugged Mr. Dursley around the middle and walked off. Mr. Dursley stood rooted to the spot. He had been hugged by a complete stranger. He also thought hehad been called a Muggle, whatever that was. He was rattled. He hurried to his car and set off for home, hoping he was imagining things, which he had never hoped before, because he didn't approve ofimagination. 3As he pulled into the driveway of number four, the first thing he saw -- and it didn't improve his mood --was the tabby cat he'd spotted that morning. It was now sitting on his garden wall. He was sure it was thesame one; it had the same markings around its eyes. "Shoo!" said Mr. Dursley loudly</p>
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
