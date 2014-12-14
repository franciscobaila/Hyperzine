<?php include ('includes/intialheader.php'); ?>


<div id="container">
  <div class="signup-form">
    <!-- prob mudar para o pagina certa -->
    <form name="login" action="start-login.php" onsubmit="return validateForm();"  method="post" >
      <p><input type="text" class="form-username form-text" min="6" max="20" placeholder="username" name="username"/></p>
      <p><input type="password" class="form-password form-text" placeholder="password" name="password"/></p>
      <p><input type="submit" class="form-submit" name="submit" value="Log In"/></p>
    </form>
  </div>
</div>


<?php
include ('includes/footer.php');
?>
