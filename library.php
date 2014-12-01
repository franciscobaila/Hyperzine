<?php
include ('includes/header.php');
?>
  <div id="container">
      <div id="books-container">
        <!-- book example ----------- -->
        <div id="book-1" class="book cenas">
          <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div>
          <img class="img-book" src="img/book.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book cenas">
          <div class="pictogram">
            <img class="img-insider" src="img/suggested.png" />
          </div>
          <img class="img-book" src="img/book13.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fan">
          <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div>
          <img class="img-book" src="img/book5.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fiction">
          <div class="pictogram">
            <img class="img-insider" src="img/top.png" />
          </div>
          <img class="img-book" src="img/book10.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book love">
          <div class="pictogram">
            <img class="img-insider" src="img/top.png" />
          </div>
          <img class="img-book" src="img/book9.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book drama">
          <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div>
          <img class="img-book" src="img/book3.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fan">
          <div class="pictogram">
            <img class="img-insider" src="img/suggested.png" />
          </div>
          <img class="img-book" src="img/book14.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fiction">
          <div class="pictogram">
            <img class="img-insider" src="img/suggested.png" />
          </div>
          <img class="img-book" src="img/book15.jpg" />
        </div>
        <!-- book example ----------- -->
        <!-- book example ----------- -->
        <div id="book-1" class="book fan">
          <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div>
          <img class="img-book" src="img/book2.jpg" />
        </div>
        <!-- book example ----------- -->
      </div>

      <div id="filter">
        <!-- filtro ordenar ----------- -->
        <div id="order-by" class="filters">
          <div class="filter-title">Order By:</div>
          <form action="">
            <p><input id="check1" type="checkbox" name="categoria" value="check1"><label for="check1">Name</label></p>
            <p><input id="check2" type="checkbox" name="categoria" value="check1"><label for="check2">Creation Date</label></p>
            <p><input id="check3" type="checkbox" name="categoria" value="check2"><label for="check3">Cslassification</label></p>
          </form>
        </div>
        <!-- filtro ordenar ----------- -->
        <!-- filtro categorias ----------- -->
        <div id="categories" class="filters filters2">
          <div class="filter-title" class="filters">Categories:</div>
          <ul id="filters">
            <li>
              <p><input id="check2.1" type="checkbox" name="categoria" value="fiction" checked><label for="check2.1">Fiction</label></p>
              <p><input id="check2.2" type="checkbox" name="categoria" value="love" checked><label for="check2.2">Love Story</label></p>
              <p><input id="check2.3" type="checkbox" name="categoria" value="drama" checked><label for="check2.3">Drama</label></p>
              <p><input id="check2.4" type="checkbox" name="categoria" value="fan" checked><label for="check2.4">Fan Fiction</label></p>
              <p><input id="check2.5" type="checkbox" name="categoria" value="cenas" checked><label for="check2.5">Cenas</label></p>
            </li>
          </ul>
        </div>
        <!-- filtro categorias ----------- -->
      </div>
  </div>

<?php
include ('includes/footer.php');
?>
