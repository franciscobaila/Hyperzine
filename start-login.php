<?php
include ("includes/conect.php");
if ($_POST ['submit']) {
	$name = mysql_escape_string($_POST['username']);
	$pass = mysql_escape_string($_POST['password']);
	echo "username";
	echo "password";
} else {
	echo "erro";
}

?>

