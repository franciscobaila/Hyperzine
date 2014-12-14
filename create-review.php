
  <?php
  include ('includes/header.php');
  ?>


  <div id="container">
      <div id="write-review">
        <textarea class="review-textarea" placeholder="Write your review"></textarea>
      </div>

      <form action="javascript:app.review()" id="classification-form">
        <p><input type="number" placeholder="0 to 10" id="input-review" min="0" max="10"></p>
        <p><input type="submit" value="Submit" id="input-review-submit"></p>
      </form>
  </div>
  <div id="message">
    Review added to book with success.
  </div>

  <script>
  $(document).ready(function() {
    $('#review-header').css({
      "color": "black"
    });
  })
  </script>


  <?php
  include ('includes/footer.php');
  ?>
