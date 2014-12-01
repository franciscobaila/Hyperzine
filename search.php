<?php
include ("includes/connect.php");
$data = mysql_escape_string($_POST['search']);
echo $data;
$query = "select * from books where book_name like '"%.$data.%"'or author like '"%.$data.%"'or category like '"%.$data.%"";

$result = mysql_query($query);
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
?>