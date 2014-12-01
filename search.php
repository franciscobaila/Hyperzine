<?php
include ("includes/connect.php");
$data = mysql_escape_string($_POST['search']);
echo $data;
$search = "select * from books where category like '%".$data."%' or  book_name  like '%".$data."%'";
echo $search;
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