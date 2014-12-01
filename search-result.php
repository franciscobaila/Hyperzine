<?php
<<<<<<< HEAD
<<<<<<< HEAD
include ('includes/header.php');
?>
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
include ('includes/footer.php');
?>
=======
=======
>>>>>>> FETCH_HEAD
include ("includes/connect.php");
$data = mysql_escape_string($_POST['search']);


$search = "select * from books where category like '".%$data%."'";
$result = mysql_query($search);
$num = mysql_num_rows($result);
if ($result) {
	$num = mysql_num_rows($result);
	if ($num >= 1) {

		}
		echo 'result';
	}
}   else  {
	echo "Nenhum resultado encontrado.";

}
<<<<<<< HEAD
?>
>>>>>>> FETCH_HEAD
=======
?>
>>>>>>> FETCH_HEAD
