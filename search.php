<?php
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
?>