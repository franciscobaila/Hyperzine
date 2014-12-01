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
<section id="h-user" class="header">
	<nav id="nav-h">
		<!-- logo username -->
		<a href="home.php"><div class="element-header big-text">HYPERZINE <span class="swatch-grey"> @sergiomrebelo</span></div></a>

		<!-- search -->
		<div class="element-header">
			<form action="search.php">
			<!-- probelmas – validação -->
			<a href="search.php"><img width="30px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-magnifier-icon.png&r=189&g=195&b=199"/> </a>
			<input class="search input"  name="search" placeholder="Search" type="search"/>
			</form>
		</div>
		<section id="leftovers">
			<div class="element-header">
				<! -- preferences -->
				<img width="30px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-gear-3-icon.png&r=189&g=195&b=199"/>
				
			</div>
			<div class="element-header">
				<!-- catalog -->
				<img width="35px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-book-17-icon.png&r=189&g=195&b=199">
			</div>
			<div class="element-header">
				<!-- library -->
				<img width="30px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-help-8-icon.png&r=189&g=195&b=199"/>
			</div>
			<div class="element-header">
					<!-- publish book -->
					<a href="publicar.php"><img width="30px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=189&g=195&b=199"/></a>

			</div>
		</section>
	</nav>
</section>
<br>
