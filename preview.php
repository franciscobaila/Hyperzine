  <?php
  include ('includes/header.php');
  ?>

  <div id="container">
    <div id="book-preview">
      <div class="pictogram">
        <img class="img-insider" src="img/picto.png" />
      </div>
      <img class="img-book" src="img/book.jpg" />
    </div>
    <div id="interaction">
      <div id="interaction-text">
        “Bryant & May and the Bleeding Heart” is the latest case for Christopher Fowler’s detective from the Peculiar Crimes Unit.
      </div>
    </div>
    <div id="links">
      <div class="link" id="view-comments">
        View Comments
      </div>
      <div class="link" id="view-reviews">
        View Reviews
      </div>
    </div>
  </div>

  <!-- VIEW COMMENTS ----------- -->
  <div class="preview-links" id="comments">
    <div class="close" id="close-comments">fechar</div>
    <!-- comment example ----------- -->
    <div class="comment">
      <div class="comment-author">
        antonio
      </div>
      <div class="comment-text">
        The first volume of a new biography argues that Stalin had social as well as organizational skills.
      </div>
    </div>
    <!-- comment example ----------- -->
  </div>

  <!-- VIEW REVIEWS ----------- -->
  <div class="preview-links" id="reviews">
    <div class="close" id="close-reviews">fechar</div>
    <!-- review example ----------- -->
    <div class="comment">
      <div class="comment-author">
        joao-critic
      </div>
      <div class="comment-text">
        A British television producer’s foray into the “surreal heart” of 21st-century Russia.
      </div>
    </div>
    <!-- review example ----------- -->
  </div>

  <?php
  include ('includes/footer.php');
  ?>
