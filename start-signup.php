<?php
include ("includes/connect.php");

$name = mysql_escape_string($_POST['username']);
$pass = mysql_escape_string($_POST['password']);


$query = "insert into users (username,password) values('".$name."','".$pass."')";


$retval = mysql_query($query);

if(! $retval )
{

  die('Tente Novamente! ' . mysql_error());
}
echo '<span class="big-text center"> Bem-Vindo ao Hyperzine! Faça login.</span>';
echo '<meta http-equiv="refresh" content="1; url=index.php">';


?>

