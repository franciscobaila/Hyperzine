<?php include ('includes/header.php'); ?>
 <script src="functions/jointJs/joint.js"></script>
 
 <section id="container">
 <section id="loading"> <span class="center-form big-text">
 <center><img width="40px" src="http://sol.pt/images/loading.gif"/><br>
  loading </span></section></center>
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
	 	<input type="submit" id="start2"class="input button big-text big-input" value="Let's Go" /><br>
	 </form>
 </section>
 <section id="categorySel" class="center-form"></section>
 <!-- parte 2 -->
 <section id="newBookPT2">
	 <nav id="lateral-bar">
	 	
		 <img class="lateral-bar-element"  id="new-page" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=135&g=135&b=135"/><br><br>
		<img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-pencil-10-icon.png&r=189&g=195&b=199"/><br><br>
		<img class="lateral-bar-element" id="create-link" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-arrow-19-icon.png&r=189&g=195&b=199"/><br><br>
		
		<img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-picture-add-icon.png&r=189&g=195&b=199"/><br><br>
		
		<img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-video-add-icon.png&r=189&g=195&b=199"/><br><br>
		<img  class="lateral-bar-element" id="finish-process" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-check-mark-icon.png&r=189&g=195&b=199"/>
	 </nav>
	 <section id="diagram" class="big-text"> <span id="titlename" >Book Name </span> by <span id="autorname">Author name	</span> </section>
	 <section id="new-page-interface">
		 <div id="cabecalho"> Pagina <span id="numero">01</span></div>
		 <div id="write-text"> <textarea id="pageInfo" ></textarea></div>
		<input type="submit" id="baixo" class="button" value="new page"/>
	 </section>

	  <section id="change-page-interface">
		 <div id="cabecalho"> Pagina <span id="numeroPagina">01</span></div>
		 <div id="write-text"> <textarea id="pageInfo2"></textarea></div>
		 <div id="change" class="button">Change</div>
	 </section>

	 
	 
 </section>
 
 </section>
<script>
var graph = new joint.dia.Graph;
 	var paper = new joint.dia.Paper({
			el: $('#diagram'),
			width: 1000,
			height: 600,
			model: graph,
			gridSize: 1
		});
		
	paper.on('cell:pointerdblclick ', 
        function(cellView, evt, x, y) { 
       // alert('cell view ' + cellView.model.id + ' was clicked'); 
        for (var i=0; i<pages.length; i++) {
	        if (pages[i][0].id ==  cellView.model.id) {
	        	
	        	$('#numero').text (i+1);
		        
		        //meter o texto que está no xml
		        console.log ("text = "+xw.root.c[i+1].c[0]);
		        $('#pageInfo2').text(xw.root.c[i+1].c[0]);
		        inUse =i;
		        $('#change-page-interface').show();
	        }
        }
    }
);
	
 $(function() {
 	
    setTimeout(function(){
    	$('#newBookPT1').show();
    	$('#loading').hide();
    	
    }, 5000);
	
 	//criação do diagrama
 	$('#start2').click(function(){
 		$('#loading').show();
 		autor = document.forms["book-info"]["bookName"].value;
 		titulo = document.forms["book-info"]["authorName"].value;
	 	
	 	$('#titlename').html (autor);
	 	$('#autorname').html (titulo);
	 	$('#loading').hide();
	 	$('#newBookPT2').show();
 	});
	test();
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
		$('textarea#pageInfo').val('');
		$('#numero').text (currentPage+1);
		$('#new-page-interface').show();
		
		
		
	});
	
	$('#baixo').click( function () {
		$('#new-page-interface').hide();
		//alert ("ad new page");
		
		console.log ("pagina criada="+(currentPage+1));
		
		//criação da caixa
		var s = "page "+(currentPage+1);
		var xValue = Math.round(Math.random()*600);
		var yValue = Math.round(Math.random()*300);
		var rect = new joint.shapes.basic.Rect({
			position: { x: xValue, y: yValue },
			size: { width: 100, height: 30 },
			attrs: { rect: { fill: 'white' }, text: { text: s, fill: 'black' } }
		});

		pages.push([rect]);
		graph.addCells([rect]);
		text = $('textarea#pageInfo').val();
		xw.writeElementString('page id='+currentPage+'',text);
			xw.writeAttributeString('page',currentPage);
			$('textarea#pageInfo').val("");
			
		 
	
		currentPage +=1;
		console.log (xw.flush());
		//passar para o XML o escrito
		
		
	});
	
	$('#create-link').click (function() {
	
		var pageFuture = parseInt(prompt("Escolha a pagina a ligar\n 0 —"+currentPage,"2"))-1;
		if (pageFuture > currentPage) {
			pageFuture = currentPage;
		}
		selection = getTextSelection("pageInfo",pageFuture);
		var link = new joint.dia.Link({
			source: { id: pages[inUse][0].id},
			target: { id: pages[pageFuture][0].id }
		});
		linksPages.push([link]);
		graph.addCells([link])
		
		//parte dinamica
		/*var link = new joint.dia.Link({
			source: { id: pages[0][0].id},
			target: { id: pages[1][0].id }
	});
		graph.addCells([link]);*/
	});
	
	$('#change').click (function() {
		$('#change-page-interface').hide();
		//actualizar xml
		xw.root.c[inUse+1].c[0] =  $('textarea#pageInfo2').val();
		

	});

	$('#finish-process').click (function () {
		endXML ();
		$('#newBookPT2').hide();
		$('#loading').show();
		<?php 
			//inserir na base de dados
		 ?>
		// window.location.assign("library.php");
    	
		$('#loading').html('<span class="center-form big-text">the book is add to library!</span>');
		 setTimeout(function(){
    	
	    	window.location.assign("library.php");
    	}, 3000);
	})




 </script>

 
 <?php 
 	//crio um xml
 	$xml = new SimpleXMLElement('<xml/>');
 	$dom = new DOMDocument("1.0", "ISO-8859-1");
 	//retirar espaços em branco
 	$dom->preserveWhiteSpace = false;
 	//gerar o codigo 
 	$dom->formatOutput = true;
 	//criando o root (nó inicial);
 	//arranjar maneira de ir a base de dados buscar o id e o nome
 	$root = $dom->createElement("book name='yolo'");
	# Para salvar o arquivo, descomente a linha
	$dom->save("book/book".date("D M j G:i:s T Y").".xml");
	
	



 ?>
 
 <?php
	 /*
		 1 — meter a ficha do livro na base de dados com a tag de incompleto
		 2 — criar um ficheiro para a adicionar um xml com o livro
		 3— abrir a interface de criação 
		 
		 
	 */
 ?>