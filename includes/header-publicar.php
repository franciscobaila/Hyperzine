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
     <link href="css/sergio-main-2.css" rel="stylesheet" type="text/css">
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
			<input class="search"  name="search" placeholder="Search" type="search"/>
			<a href="search.php"><img width="20px"src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-magnifier-icon.png&r=189&g=195&b=199"/></a>
			</form>
		</div>

			<div class="element-header">
				<div id="publish-header" class="swatch-black inside-element">
					PUBLISH BOOK
				</div>
				<div id="publish-header" class="swatch-black inside-element">
					
				</div>
			</div>

			<div class="element-header">
				<div class="inside-element" onclick="end()">
					SAVE PROJECT
				</div>
				<div class="inside-element" onclick="end()">
					EXIT
				</div>
				
			</div>
</div>

<script> 
	function end() {
		r = confirm("Save Project?");
		if (r == true) {
			alert ("project saved");
			window.location.assign("home.php");
		} else {
			window.location.assign("home.php");
		}
	}
	

</script>
