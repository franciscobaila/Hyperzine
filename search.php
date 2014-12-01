<?php
include ('includes/header.php');?>

 <div id="container">
    <div id="search-message">Search results:</div>
      <div id="books-container">
        <!-- book example ----------- -->
        <div id="book-1" class="book cenas">
          <div class="pictogram">
            <img class="img-insider" src="img/open.png" />
          </div>
          <img class="img-book" src="img/book.jpg" />
        </div>
        <!-- book example ----------- -->
      </div>
  </div>

<?php
$data = mysql_escape_string($_POST['search']);

$search = "select * from books where category like '%".$data."%' or  book_name  like '%".$data."%'";

$result = mysql_query($search);
$num = mysql_num_rows($result);
if ($result) {
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
	$bookName = $row ["book_image"];
	$autor = $row ["author"];
	$id = $row["book_id"];
	$image = $row["book_image"];
	$category = $row ["category"];


	echo "book name:".$bookName." autor:".$autor." id ".$id." image:".$image." categoria:".$category."<br>";
	//printf ("Name: %s  Image: %s", $row[1], $row[4] ,'<br />');
	}
} else {
	echo "nenhum resultado encontrado ";
}
?>


<?php
include ('includes/footer.php');
?>
