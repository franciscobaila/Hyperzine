<?php
include ("includes/connect.php");
$name = mysql_escape_string($_POST['username']);
$pass = mysql_escape_string($_POST['password']);
echo $name
echo $pass

$query = "insert into users (username,password) values('".$name."','".$pass."'";

echo $query
$retval = mysql_query($query);

if(! $retval )
{
  die('Tente Novamente! ' . mysql_error());
}
echo 'Bem-Vindo ao Hyperzine! Faça login.'
echo '<meta http-equiv="refresh" content="0; url=index.php">';


?>

