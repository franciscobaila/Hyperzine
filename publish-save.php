<?php include ('includes/header-publicar.php'); ?>
 <script src="functions/jointJs/joint.js"></script>

 <section id="container">
 <section id="loading"> <span class="center-form big-text">
 <center><img width="40px" src="http://sol.pt/images/loading.gif"/><br>
  loading </span></section></center>
  <section id="newBookPT1">
  	<img src="save.png"></img>
  </section>
  </section>
<script>
 $('html').css ("overflow", "hidden");
 setTimeout(function(){
   	 //$('#loading').fadeOut( "slow" );
   	 
   	 	$( "#loading" ).fadeOut( "slow", function() {
			// Animation complete.
			$('#newBookPT1').fadeIn( "slow" );
		});	 
		});
 </script>