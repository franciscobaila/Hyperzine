<?php include ('includes/intialheader2.php'); ?>
  <div id="container">
	<section class="center-form">
		<!-- prob mudar para o pagina certa -->
		<p class="big-text input"> Sign Up</p>
		<form name="signup" action="start-signup.php" onsubmit="return validateSignUp();"  method="post" >
			<input type="text" class="input login " min="6" max="20" placeholder="username" name="username"/>
			<input type="password" class="input login" placeholder="password" name="password"/>
			<input type="submit" name="submit" class="input button big-text" value="Start!"/>
		</form>
	</section>
</div>

<?php
include ('includes/footer.php');
?>
