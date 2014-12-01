<?php
include ("includes/connect.php");
$name = mysql_escape_string($_POST['username']);
$pass = mysql_escape_string($_POST['password']);


$query = "select * from users where username='".$name."' and password='".$pass."'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
if ($result) {
	$num = mysql_num_rows($result);
	if ($num >= 1) {
		echo '<meta http-equiv="refresh" content="0; url=home.php">';
	}
}   else  {
	echo "aconteceu um erro";
	//echo $name;
	//echo $pass;
	//echo '<meta http-equiv="refresh" content="1; url=login.php">';
}
?>

