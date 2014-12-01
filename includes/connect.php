
<?php 


// nós conectamos com localhost na porta 3307



$dbhost = '127.0.0.1:8889';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$db_found = mysql_select_db('Hyperzine');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//echo 'Conexão bem sucedida';
//$link = mysql_connect('127.0.0.1:8889', 'root', 'root');
//if (!$link) {
  //  die('Não foi possível conectar: ' . mysql_error());
//}
//echo 'Conexão bem sucedida';

//if ($db_found) {

//print "Database Found";

//}
//else {

//print "Database NOT Found";

//}


//mysql_close($link);

?>