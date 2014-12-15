<?php
include ('includes/header.php');?>

 <div id="container">

         <div id="books-container">
              <!-- book example ----------- -->
        <?php
        $data = mysql_escape_string($_POST['search']);
        $search = "select * from books where category like '%".$data."%' or author like '%".$data."%' or  book_name  like '%".$data."%'";
        $result = mysql_query($search);
        $num = mysql_num_rows($result);

        if ($num == 0){
          echo "<div id='search-message'>NO RESULTS FOUND FOR ", $data ,"</div>";
        }
        else if ($result && $num > 0){
          echo "<div id='search-message'>RESULTS FOUND FOR ", $data ," :</div>";
          while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
          //$bookName = $row ["book_image"];
          //$autor = $row ["author"];
          //$id = $row["book_id"];
          //$image = $row["book_image"];
          //$category = $row ["category"];

          echo "<div id='book-1' class='book cenas'>";

          echo "<img class='img-book' src='http://localhost:8888/", $row["book_image"], "'/>";
          echo "</div>";

          //echo "book name:".$bookName." autor:".$autor." id ".$id." image:".$image." categoria:".$category."<br>";
          //printf ("Name: %s  Image: %s", $row[1], $row[4] ,'<br />');
          }
        } else {

        }
        ?>

      </div>
  </div>


<?php
include ('includes/footer.php');
?>
