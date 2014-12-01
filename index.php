<?php include ('includes/intialheader.php'); ?>
  <div id="container">
	<section class="center-form">
		<!-- prob mudar para o pagina certa -->
		<p class="big-text input"> Login</p>
		<form name="login" action="start-login.php" onsubmit="return validateForm();"  method="post" >
			<input type="text" class="input login " min="6" max="20" placeholder="username" name="username"/>
			<input type="password" class="input login" placeholder="password" name="password"/>
			<input type="submit" name="submit" class="input button big-text" value="Let's Go"/>
		</form>
	</section>
</div>

