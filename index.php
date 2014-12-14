<?php include ('includes/intialheader2.php'); ?>


<div id="container">
  <div class="signup-form">
    <!-- prob mudar para o pagina certa -->
    <form name="signup" action="start-signup.php" onsubmit="return validateSignUp();"  method="post" ></p>
      <p><input type="text" class="form-username form-text" min="6" max="20" placeholder="username" name="username"/></p>
      <p><input type="password" class="form-password form-text" placeholder="password" name="password"/></p>
      <p><input type="password" class="form-password form-text" placeholder="confirm password" name="password"/></p>
      <p><input type="text" class="form-mail form-text" placeholder="e-mail" name="e-mail"/></p>
      <p><input type="submit" class="form-submit" name="submit" value="Sign Up"/></p>
    </form>
  </div>

  <div class="about-text">
    Hypertext fiction is a genre of electronic literature, characterized by the use of hypertext links which provide a new context for non-linearity in literature and reader interaction. The reader typically chooses links to move from one node of text to the next, and in this fashion arranges a story from a deeper pool of potential stories. Its spirit can also be seen in interactive fiction.<br><br>A fanzine (portmanteau of fan and magazine or -zine) is a nonprofessional and nonofficial publication produced by fans of a particular cultural phenomenon (such as a literary or musical genre) for the pleasure of others who share their interest. The term was coined in an October 1940 science fiction fanzine by Russ Chauvenet and first popularized within science fiction fandom, from whom it was adopted by others.
  </div>
</div>


<?php
include ('includes/footer.php');
?>
