<?php
include ("includes/connect.php");
$data = mysql_escape_string($_POST['search']);

$search = "select * from books where category like '%".$data."%' and  book_name  like '%".$data."%'";

$result = mysql_query($search);
$num = mysql_num_rows($result);
if ($result) {
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
	$bookName = $row ["book_image"];
	$autor = $row ["author"];
	$id = $row["book_id"];
	$image = $row["book_image"];
	$category = $row ["category"];
	echo "book name ".$bookName." autor ".$autor." id ".$id." image ".$image." categoria ".$category."<br>";
	}
} else {
	echo "nenhum resultado encontrado ";
}


/*echo $seatch;
$result = mysql_query($search);
$num = mysql_num_rows($result);
if ($result) {
	$num = mysql_num_rows($result);
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
	
    //printf("ID: %s  Name: %s", $row[0], $row[1]);  
	}
	
	
	
	echo 'result';
	}
}   else  {
	echo "Nenhum resultado encontrado.";

}*/
?>