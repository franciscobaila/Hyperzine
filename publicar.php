<?php include ('includes/header.php'); ?>
 <section id="container">
 <section id="loading"> loading </section>
 <!--  parte 1-->
 <section id="newBookPT1">
	 <form name="book-info" class="center-form" action="javascript:void(0);" onsubmit="createBookProcess ()" style="top:0px" method="post">
	 	<!-- book name -->	
	 	<input type="text" class="input  big-text big-input" min="6" max="20" placeholder="Book's Name" name="bookName" required /><br>
	 	<!-- autor -->
	 	<input type="text" class="input  big-text big-input" placeholder="Author Name" name="authorName" id="authorName" required /><br>
	 	<!-- categoria -->
	 	<input type="text" id="input-click" class="input  big-text big-input" placeholder="Category" name="category" readonly/><br>
	 	<!-- submit -->
	 	<input type="submit" class="input button big-text big-input" value="Let's Go" /><br>
	 </form>
 </section>
 <section id="categorySel" class="center-form"></section>
 <!-- parte 2 -->
 <section id="newBookPT2">
	 <nav id="lateral-bar">
	 	
		 <img class="lateral-bar-element"  id="new-page" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=135&g=135&b=135"/><br><br>
		
		<img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-arrow-19-icon.png&r=189&g=195&b=199"/>
		
	 </nav>
	 <section id="diagram"> <span id="titlename">Book Name </span> by <span id="autorname">Author name	</span> </section>
	 <section id="new-page-interface">
		 <div id="cabecalho"> Pagina <span id="numero">01</span></div>
		 <div id="write-text"> <textarea></textarea></div>
		 <div id="baixo" class="button">nova pagina </div>
	 </section>$dom = new DOMDocument("1.0", "ISO-8859-1");

	 
	 
	 
 </section>
 
 </section>
 <script>
 $(function() {
 	 for (var i=0; i<categorys.length; i++) {
	 	$( "#categorySel" ).append("<span class='selCategory center-form link big-text'>"+categorys [i]+"</span><br> ");
	 	//adicionar uma função a cada uma
	 	
 	}
 	document.forms["book-info"]["category"].value = categorys [Math.round(categorys.length/2)];
 	$ (".selCategory").click (function() {
	 	var val = $(this).text();
	 	document.forms["book-info"]["category"].value = val;
	 	$( "#categorySel" ).hide();
 	});
 	$( "#input-click" ).click(function() {
 		document.forms["book-info"]["category"].value ="";
	 	$( "#categorySel" ).show();
	 });
	 
	 
	 
    });
    
	$('#new-page').click (function () {
		$('#new-page-interface').show();
	});
 </script>
 
 <?php 
 	$xml = new SimpleXMLElement('<xml/>');
 	$dom = new DOMDocument("1.0", "ISO-8859-1");
 	//retirar espaços em branco
 	$dom->preserveWhiteSpace = false;
 	//gerar o codigo 
 	$dom->formatOutput = true;
 	//criando o root (nó inicial);
 	$root = $dom->createElement("agenda");
 	#nó filho (contato)
	$contato = $dom->createElement("contato");

	#setanto nomes e atributos dos elementos xml (nós)
	$nome = $dom->createElement("nome", "Rafael Clares");
	$telefone = $dom->createElement("telefone", "(11) 5500-0055");
	$endereco = $dom->createElement("endereco", "Av. longa n 1");
	
	#adiciona os nós (informacaoes do contato) em contato
	$contato->appendChild($nome);
	$contato->appendChild($telefone);
	$contato->appendChild($endereco);
	
	#adiciona o nó contato em (root) agenda
	$root->appendChild($contato);
	$dom->appendChild($root);
	
	# Para salvar o arquivo, descomente a linha
	$dom->save("contatos.xml");
	
	#cabeçalho da página
	header("Content-Type: text/xml");
	
	# imprime o xml na tela
	print $dom->saveXML();



 ?>
 
 <?php
	 /*
		 1 — meter a ficha do livro na base de dados com a tag de incompleto
		 2 — criar um ficheiro para a adicionar um xml com o livro
		 3— abrir a interface de criação 
		 
		 
	 */
 ?>