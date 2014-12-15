<?php
include ('includes/header.php');
?>
  <div id="container">
      <div id="books-container">
        <!-- book example ----------- -->
        <div id="book-1" class="book fan read">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/read.png" />
          </div> -->
          <img class="img-book" src="img/book.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book love open">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div> -->
          <img class="img-book" src="img/book2.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fiction open">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div> -->
          <img class="img-book" src="img/book12.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book cenas read">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/read.png" />
          </div> -->
          <img class="img-book" src="img/book11.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book cenas open">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div> -->
          <img class="img-book" src="img/book6.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book love read">
          <!-- <div class="pictogram">
            <img class="img-insider" src="img/read.png" />
          </div> -->
          <img class="img-book" src="img/book3.jpg" />
        </div>
        <!-- book example ----------- -->
      </div>

      <div id="filter">
        <!-- filtro ordenar ----------- -->
        <div id="order-by" class="filters">
          <div class="filter-title">ORDER BY</div>
          <form action="">
            <p><input id="check1" type="checkbox" name="categoria" value="check1"><label for="check1">Name</label></p>
            <p><input id="check2" type="checkbox" name="categoria" value="check1"><label for="check2">Creation Date</label></p>
            <p><input id="check3" type="checkbox" name="categoria" value="check2"><label for="check3">Classification</label></p>
          </form>
        </div>
        <!-- filtro ordenar ----------- -->
        <!-- filtro leitura ----------- -->
        <div id="reading" class="filters filters2">
          <div class="filter-title">CATEGORIES</div>
          <ul id="filters2">
            <li>
            <p><input id="check3.1" type="checkbox" name="categoria" value="read"><label for="check3.1">To Read</label></p>
            <p><input id="check3.2" type="checkbox" name="categoria" value="open"><label for="check3.2">Reading</label></p>
            <br>
            <p><input id="check2.1" type="checkbox" name="categoria" value="fiction"><label for="check2.1">Fiction</label></p>
            <p><input id="check2.2" type="checkbox" name="categoria" value="love"><label for="check2.2">Love Story</label></p>
            <p><input id="check2.3" type="checkbox" name="categoria" value="drama"><label for="check2.3">Drama</label></p>
            <p><input id="check2.4" type="checkbox" name="categoria" value="fan"><label for="check2.4">Fan Fiction</label></p>
            <p><input id="check2.5" type="checkbox" name="categoria" value="cenas"><label for="check2.5">Others</label></p>
            </li>
          </ul>
        </div>
        <!-- filtro leitura ----------- -->
      </div>
  </div>

  <script>
  $(document).ready(function() {
    $('#shelf-header').css({
      "color": "black"
    });
  })
  </script>


  <?php
  include ('includes/footer.php');
  ?>
