<?php
	include('includes/connect.php');
	//guardar xml na pagina 
	$name = htmlspecialchars($_POST["name"]);
	$autor= htmlspecialchars($_POST["author"]);
	$category = htmlspecialchars($_POST["category"]);
	//apagar
	$category = "hypertext";
	$bookXml = $_POST["bookXmlString"];
	$bookUrl = "books/book".$name."-".$author.".xml";
	$newBook = fopen($bookUrl, 'w');
	//escrever na base de dados o livro
	fwrite($newBook, $bookXml);
	fclose($newBook);
	$query = "insert into books (book_name, author,category,book_image,book_xml) values ('".$name."','".$autor."','".$category."', 'book/images/default.png','".$bookUrl."')";
	$result = mysql_query($query);
	echo $result;
		
?>