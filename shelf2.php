<?php
include ('includes/header.php');?>

 <div id="container">

    <div id="search-message">SHELF</div>
         <div id="books-container">
              <!-- book example ----------- -->
        <?php

        $search = "select * from shelf";
        $result = mysql_query($search);

        if ($result) {
          while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
          //$bookName = $row ["book_image"];
          //$autor = $row ["author"];
          //$id = $row["book_id"];
          //$image = $row["book_image"];
          //$category = $row ["category"];

          echo "<div id='book-1' class='book",$row["book_image"],"open'>";

          echo "<img class='img-book' src='http://localhost:8888/", $row["book_image"], "'/>";
          echo "</div>";

          //echo "book name:".$bookName." autor:".$autor." id ".$id." image:".$image." categoria:".$category."<br>";
          //printf ("Name: %s  Image: %s", $row[1], $row[4] ,'<br />');
          }
        } else {
          echo "Estante vazia";
        }
        ?>

      </div>
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
        <div id="reading" class="filters filters3">
          <div class="filter-title">BOOKS</div>
          <ul id="filters2">
            <li>
            <p><input id="check3.1" type="checkbox" name="categoria" value="read" checked><label for="check3.1">To Read</label></p>
            <p><input id="check3.2" type="checkbox" name="categoria" value="open" checked><label for="check3.2">Reading</label></p>
            </li>
          </ul>
        </div>
        <!-- filtro leitura ----------- -->
        <!-- filtro categorias ----------- -->
        <div id="categories" class="filters filters2">
          <div class="filter-title" class="filters">CATEGORIES</div>
          <ul id="filters3">
            <li>
              <p><input id="check2.1" type="checkbox" name="categoria" value="fiction" checked><label for="check2.1">Fiction</label></p>
              <p><input id="check2.2" type="checkbox" name="categoria" value="love" checked><label for="check2.2">Love Story</label></p>
              <p><input id="check2.3" type="checkbox" name="categoria" value="drama" checked><label for="check2.3">Drama</label></p>
              <p><input id="check2.4" type="checkbox" name="categoria" value="fan" checked><label for="check2.4">Fan Fiction</label></p>
              <p><input id="check2.5" type="checkbox" name="categoria" value="cenas" checked><label for="check2.5">Others</label></p>
          </li>
        </ul>
        </div>
        <!-- filtro categorias ----------- -->
      </div>
  </div>

<?php
include ('includes/footer.php');
?>