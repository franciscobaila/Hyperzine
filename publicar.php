<?php include ('includes/header.php'); ?>
 <script src="functions/jointJs/joint.js"></script>


 <section id="container">
 <section id="loading"> <span class="center-form big-text">
 <center><img width="40px" src="http://sol.pt/images/loading.gif"/><br>
  loading </span></section></center>
  <!-- POP UP concect page -->
  <section id="pop-conect">
	  <div id="closePP"><img class="closeP" id="closePage" width="30px" src="./icons/close.png"/></div>
	 <!-- <div id="page-list">
		 <li id=""> </li>
	  </div>  dropdown menu do http://codepen.io/Tombek/pen/JAvHC -->
	  <dl class="dropdown">
		  <dt><a><span id="test-altera">Dropdown n°2</span></a></dt>
		  <dd>
			<ul id="page-list">
				<li><a class="default">Dropdown n°2</a></li>
				<li><a>Option n°1</a></li>
				<li><a>Option n°2</a></li>
				<li><a>Option n°3</a></li>
				<li><a>Option n°4</a></li>
				<li><a>Option n°5</a></li>
				<li><a>Option n°6</a></li>
			</ul>
		</dd>
	</dl>
	  <!-- <button id="ChangePage" class="button normal-size">Link</button>-->
</select>
  </section>
 <!--  parte 1-->
 <section id="newBookPT1">

 	<section id="newBook1-2" class="center-hor center-ver">
 	<!-- lol -->
 	<br><br><br><br><br><br>

 	<h1> Finnaly, you can make a book!</h1>
 	<div class="top-space normal-size"> for this you need to write the data <br>of the group, then have to create the book using the displayed interface.Feels prepared?</div>
 </div>
 <button id="startBook" class="button normal-size">Start Now!</button>
 	</section>
 	<!-- javascript:void(0); para não sair da pagina com o form -->
	<form name="book-info" id="insertinfo"class="center-hor center-ver" action="javascript:void(0);" style="top:0px" method="post">
		<br>
		<br>
		<br>
		<label class="normal-size "> Book Info:</label><br>
	 	<input type="text" class="input h1-size margin-b"  placeholder="Book's Name" id="bookName" name="bookName" required />
	 	<br>
	 	<br>
	 	<input type="text" class="input h1-size  margin-b"  placeholder="Author's Name" id="authorName" name="authorName" required /><br><br>
	 	<input type="text" id="input-click" class="input h1-size margin-b" placeholder="Category ↓" id="cat-name"name="category" readonly/><br><br>
	 	<input type="file" id="input-file" class="normal-size" name="cover-img" ><br><br><bt>
	 	<input type="submit" id="start2"class="input button normal-size" value="Let's Go" /><br>
	 </form>
 </section>
 <section id="categorySel" class="center-form"></section>
 <!-- parte 2 -->
 <section id="newPage-interface" >
 	<!-- Novo livro -->
 	<img class="closeP" id="closePage" width="30px" src="./icons/close.png"/>
	 <div id="newPageName" class="h1-size marginTop"contenteditable="true">Page 1</h1></div><br><br>
	 <div id="alterar">

		<img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-pencil-10-icon.png&r=189&g=195&b=199"/><img class="lateral-bar-element" id="create-link" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-arrow-19-icon.png&r=189&g=195&b=199"/><img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-picture-add-icon.png&r=189&g=195&b=199"/><img class="lateral-bar-element" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-video-add-icon.png&r=189&g=195&b=199"/><br><br>

	 </div>

	 <div  id="c-div" class="counteudo">click to compose the page</div>
	 <textarea id="c-textbox"class="counteudo normal-size" placeholder="compose the page"></textarea>
	 <button id="savePage" class="button normal-size">Save</button>
	 <button id="ChangePage" class="button normal-size">Save</button>
 </section>
 <section id="newBookPT2">
	 <nav id="lateral-bar">
	 		 <img class="lateral-bar-element"  id="new-page" width="30px" src="http://iconmonstr.com/g/gd/makefg.php?i=s2/default/iconmonstr-plus-icon.png&r=135&g=135&b=135"/><br><br>
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
		       // console.log ("text = "+xw.root.c[i+1].c[0]);
		        //parte Nova
		        $('#savePage').hide();
		        inUse =i;

		        //$("#c-div").html(xw.root.c[i+1].c[0]);
		        var str = xw.root.c[i+1].c[0];

		       	$( "#newPage-interface" ).fadeIn( "slow");
		      // str.replace("Microsoft", "W3Schools");
		        //$('#pageInfo2').text(xw.root.c[i+1].c[0]);
		        //get title
		         var titleEnd = str.search("</title>");
		         var strTitle = str.substring(7, titleEnd);
		         $('#newPageName').text (strTitle);
		         //getPageText
		         var pageStart = str.search("<pageCode>")
		         var strText = str.substring(pageStart+10, str.length-10);
		         $('#c-div').text (strText);


		        //mostrar segundo botão de change
		        $('#ChangePage').show();

	        }
        }
    }
);

 $(function() {

    setTimeout(function(){
   	 //$('#loading').fadeOut( "slow" );
   	 	$( "#loading" ).fadeOut( "slow", function() {
			// Animation complete.
			$('#newBookPT1').fadeIn( "slow" );
		});


    }, 2000);
	$('#ChangePage').click(function(){
		xw.root.c[inUse+1].c[0]="<title>"+$('#newPageName').text()+"</title>"+"<pageCode>"+$('#c-div').html()+"</pageCode>";
		alert (xw.root.c[inUse+1].c[0]);
		$('#ChangePage').hide();
		$('#savePage').show();
		$( "#newPage-interface" ).fadeOut( "slow");
		cleanFields ();
	});
 	//criação do diagrama
 	$('#start2').click(function(){
 		$( "#newBookPT1" ).fadeOut( "slow", function() {
			// Animation complete.
			//$('#loading').fadeIn( "slow" );
			$( "#newBookPT2" ).fadeIn( "slow");
		});
  		titulo = $('#bookName').val();
  		//document.forms["book-info"]["bookName"].value;
 		autor = $('#authorName').val();

	 	category = $('#cat-name').val();

	 	//alert ("aidjd"+category);
	 	$('#titlename').text(titulo);
	 	$('#autorname').text(autor);
	 	//aqui é que crio o xml
	 	test(autor, titulo, category);
	 	$('#loading').fadeOut ( "slow" );

	});


	//test();
 	 for (var i=0; i<categorys.length; i++) {
	 	$( "#categorySel" ).append("<span class='selCategory center-form link big-text'>"+categorys [i]+"</span><br> ");
	 	//adicionar uma função a cada uma

 	}
 	//document.forms["book-info"]["category"].value = categorys [Math.round(categorys.length/2)];
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
		$( "#newPage-interface" ).fadeIn( "slow");
	});


	$('#create-link').click (function() {
		//mudar a div que interessa
		$("#page-list").html("<li>yolo</li>");
		for (var i=0; i<pages.length; i++) {
			console.log (pages[i][0]._previousAttributes.attrs.text.text);
			//meter isto em lista
		}
		$('#test-altera').html ("teste");
		$('#pop-conect').fadeIn("fast");

		var pageFuture= 1;
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

	});

	$('#change').click (function() {
		$('#change-page-interface').hide();
		//actualizar xml
		xw.root.c[inUse+1].c[0] =  $('textarea#pageInfo2').val();


	});

	$('#finish-process').click (function () {
		$( "#newBookPT2" ).fadeOut( "slow", function() {
				// Animation complete.
				$("#loading").fadeIn( "slow" );
				xw.writeEndDocument();

				$.ajax({
					type: "POST",
					url: "saveBook.php",
					data: { name: titulo, bookXmlString: xw.flush(), author: autor, category: category}
				}).done(function( msg ) {
		  			$("#loading").text("The Book is added to Library");
		  			setTimeout(function(){
			  			window.location.assign("library.php");
			  		}, 1500)
			 });

		});
				//$('#newBookPT2').hide();
		//$('#loading').show();
		/*$.ajax({
			type: 'POST',
			url: "./demo_test.xml",//url of receiver file on server
			data: xw, //your data
			success: function (){
				alert ("result");
			}, //callback when ajax request finishes
			dataType: text //text/json...
		});*/
		<?php
			//inserir na base de dados
		 ?>
		// window.location.assign("library.php");

		/*$('#loading').html('<span class="center-form big-text">the book is add to library!</span>');
		 setTimeout(function(){

	    	window.location.assign("library.php");
    	}, 3000);*/
	})

	//dia de hoje
	$('#startBook').click(function(){
		//apagar a div 1 e meter a div 2
		$( "#newBook1-2" ).fadeOut( "slow", function() {
			// Animation complete.
			$("#insertinfo").fadeIn( "slow" );
			});
	});

	//text area editavel
	$( ".counteudo" ).click(divClicked);

	$("#closePage").click(function(){
		$( "#newPage-interface" ).fadeOut( "slow", function() {
		cleanFields ();
		});
	});

	$("#savePage").click(function(){
		console.log ("pagina criada="+(currentPage+1));
		var s = $('#newPageName').text();
		var xValue = Math.round(Math.random()*600);
		var yValue = Math.round(Math.random()*300);
		var rect = new joint.shapes.basic.Rect({
			position: { x: xValue, y: yValue },
			size: { width: 100, height: 30 },
			attrs: { rect: { fill: 'white' }, text: { text: s, fill: 'black' } }
		});
		pages.push([rect]);
		graph.addCells([rect]);
		var text = $('#c-div').html();
		if (text == "click to compose the page") {
			text ="";
		}
	//alert (text);
		var xmlText="<title>"+s+"</title>"+"<pageCode>"+text+"</pageCode>";
		var page = xw.writeElementString('page'+(currentPage+1), xmlText);
			//page.writeAttributeString('page',currentPage);


		//text = $('textarea#pageInfo').val();
		$( "#newPage-interface" ).fadeOut( "slow", function() {
			currentPage++;
			console.log (xw.flush());
			cleanFields ();
			//alterar no criador
			$('#newPageName').text("page"+(currentPage+1));
		});
	});

function cleanFields () {
	$('#ChangePage').hide();
	$('#savePage').show();
	$('#c-div').text("click to compose the page");
}

$('#closePP').click(function(){
	$('#pop-conect').fadeOut("fast");
});

 </script>



 <?php
 include ('includes/footer.php');
 ?>
