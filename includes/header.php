<!DOCTYPE html>
<?php include ('includes/connect.php');?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Grupo 17">
	<title>Hyperzine</title>

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
     <!-- CSS -->
     <link href="css/style.css" rel="stylesheet" type="text/css">
     <link href="css/sergio-main.css" rel="stylesheet" type="text/css">
     <!-- JS -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Bibliotecas -->
     <script src="functions/XMLWriter-1.0.0.js"></script>
     <!-- folhas de JS -->
     <script src="functions/functions.js"></script>
     <!-- Biblioteca de criação dos diagramas -->
	 <link rel="stylesheet" href="functions/jointJs/joint.css" />
</head>
<body>


<div id="header">
		<!-- logo username -->
		<div class="element-header">
			<div class="inside-element" id="logo">HYPERZINE</div>
		</div>

		<div id="usar-name" class="element-header">HI,<br><b>SERGIOREBELO</b></div>

		<!-- search -->
		<div class="element-header">
			<form action="search.php" method="post">
			<!-- probelmas – validação -->
			<input id="search-input" class="search" name="search" placeholder="Search" type="search"/>
			<img width="20px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-magnifier-icon.png&r=189&g=195&b=199"/>
			</form>
		</div>

			<div class="element-header">
				<div id="publish-header" class="inside-element">
					PUBLISH BOOK
				</div>
				<div id="shelf-header" class="inside-element">
					SHELF
				</div>
				<div id="library-header" class="inside-element">
					LIBRARY
				</div>
				<div id="review-header" class="inside-element">
					MAKE A REVIEW
				</div>
			</div>

			<div class="element-header">
				<div class="inside-element">
					SETTINGS
				</div>
				<div class="inside-element">
					EN/PT
				</div>
				<div id="log-header" class="inside-element">
					LOG-OUT
				</div>
			</div>
</div>
