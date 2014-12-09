<?php
include ('includes/header.php');?>

 <div id="container">

    <div id="search-message">SEARCH RESULTS</div>
         <div id="books-container">
              <!-- book example ----------- -->
        <?php
        $data = mysql_escape_string($_POST['search']);
        $search = "select * from books where category like '%".$data."%' or  book_name  like '%".$data."%'";
        $result = mysql_query($search);

        if ($result) {
          while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
          //$bookName = $row ["book_image"];
          //$autor = $row ["author"];
          //$id = $row["book_id"];
          //$image = $row["book_image"];
          //$category = $row ["category"];



          echo "<img class='img-book' src='http://localhost:8888/", $row["book_image"], "'/>";


          //echo "book name:".$bookName." autor:".$autor." id ".$id." image:".$image." categoria:".$category."<br>";
          //printf ("Name: %s  Image: %s", $row[1], $row[4] ,'<br />');
          }
        } else {
          echo "nenhum resultado encontrado ";
        }
        ?>

      </div>
  </div>


<?php
include ('includes/footer.php');
?>
