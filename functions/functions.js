/*variaveis*/
var categorys = [
	"Interactive novel",
	"Cybertext",
	"Hypertext",
	"Hypertext poetry",
	"Storyspace",
	"Text adventure",
	"Visual novel",
	"Web Comics"
];

var autor ="";
var titulo = "";
var category = "hypertext fiction";
var categoria ="";

var pages = new Array();
var linksPages = new Array();
var currentPage = 0;

var inUse = 0;
var id = 111111111110;
//variaveis para criação do graph
/*var graph = new joint.dia.Graph;
var paper = new joint.dia.Paper({
			el: $('#diagram'),
			width: 1000,
			height: 600,
			model: graph,
			gridSize: 1


});		*/

//criação do XML 
var xw = new XMLWriter('UTF-8');
xw.formatting = 'indented';//add indentation and newlines
xw.indentChar = ' ';//indent with spaces
xw.indentation = 2;//add 2 spaces per level

var text= "yolo";

//selecção 
var selection;

function validateSignUp() {
	var bname = false;
	var bpass = false;
	var name = document.forms["login"]["username"].value;
	var pass = document.forms["login"]["password"].value;
	/*apagar os dados*/
	if ( pass.length > 6) {
		bpass = true;
	} else if (pass == "") {
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["password"]).attr("placeholder", "type something in this field");
		$(document.forms["login"]["password"]).addClass("error");
		
	} else {
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["password"]).attr("placeholder", "invalid password");
		$(document.forms["login"]["password"]).addClass("error");
	}
	if (name.length > 6) {
		$(document.forms["login"]["username"]).removeClass("error");
		bname = true;
	} else if (name == "") {
		document.forms["login"]["username"].value = "";
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["username"]).attr("placeholder", "type something in this field");
		$(document.forms["login"]["username"]).addClass("error");
		
	} else {
		document.forms["login"]["username"].value = "";
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["username"]).attr("placeholder", "invalid username");
		$(document.forms["login"]["username"]).addClass("error");
	}
	
	if (bname == true && bpass == true) {
		return true;
	} else {
		return false;
	}
	
} 

function validateForm() {
	var bname = false;
	var bpass = false;
	var name = document.forms["login"]["username"].value;
	var pass = document.forms["login"]["password"].value;
	/*apagar os dados*/
	if ( pass.length > 6) {
		bpass = true;
	} else if (pass == "") {
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["password"]).attr("placeholder", "type something in this field");
		$(document.forms["login"]["password"]).addClass("error");
		
	} else {
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["password"]).attr("placeholder", "this password is wrong");
		$(document.forms["login"]["password"]).addClass("error");
	}
	if (name.length > 6) {
		$(document.forms["login"]["username"]).removeClass("error");
		bname = true;
	} else if (name == "") {
		document.forms["login"]["username"].value = "";
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["username"]).attr("placeholder", "type something in this field");
		$(document.forms["login"]["username"]).addClass("error");
		
	} else {
		document.forms["login"]["username"].value = "";
		document.forms["login"]["password"].value = "";
		$(document.forms["login"]["username"]).attr("placeholder", "this username not exist");
		$(document.forms["login"]["username"]).addClass("error");
	}
	
	if (bname == true && bpass == true) {
		return true;
	} else {
		return false;
	}
	
} 
// probl feedback 
function createBookProcess () {
	if (document.forms["book-info"]["category"].value != "" &&  document.forms["book-info"]["bookName"].value != "" &&  document.forms["book-info"]["authorName"].value != "" ) {
		
		titulo = document.forms["book-info"]["authorName"].value;
		categoria = document.forms["book-info"]["category"].value;
		titulo =  document.forms["book-info"]["bookName"].value;
		//$("#loading").show ();
		//	$("#newBookPT1").hide();
		startBookInterace ();	
	}
	else {
	
		/**/
		//prob: ver se os livros existem e assim
	}
}

function startBookInterace () {
	$("#loading").fadeOut( "slow" );
	$("#newBookPT2").fadeIn( "slow" );
}

function validateSearch () {
	alert ("yolo");
}

//criar XML
function test(autor2, titulo2, category2){    
   xw.writeStartDocument(true);
   xw.writeElementString('book');
   xw.writeAttributeString('autor',autor2);
   xw.writeAttributeString('categorias',category2);
   xw.writeAttributeString('title',titulo2);
   categoria = category2;
   category = category2;
  };

function endXML () {
	xw.writeEndDocument();
   console.log( xw.flush() );
}

function getSelectiononl (s) {
	var field = document.getElementsByClassName(s);
       
       // console.log (field);
		var startPos = field.selectionStart;
        var endPos = field.selectionEnd;        
        var field_value = field.value;
        var selectedText = field_value.substring(startPos,endPos);
         alert (selectedText);

}


function getTextSelection(s,number){
		//alert (s);
             // str.link(selectedText);
        var res = field_value.replace (selectedText, "<a href='book.php?p="+number+"'>"+selectedText+"</a>");
        document.getElementById(s).value = res;
       // alert (selectedText);
        return selectedText;
}   


//funções para editar uma text area
function divClicked() {
	
	$(this).hide();
	
	var _text = $(this).html();
	if (_text != "click to compose the page") {
		$('#c-textbox').val(_text);
	}
	$('#c-textbox').show();
	$('#c-textbox').focus();
	
  
}

function editableTextBlurred() {
	//if (create-link != "create-link") {
	console.log(clicked_link.valueOf());
	if (clicked_link.valueOf() != "create-link") {
		console.log("fljflfk");
		$('#c-textbox').hide();
		if ($('#c-textbox').val() != "") {
			$('#c-div').html($('#c-textbox').val());
		}
		$('#c-div').show();
	}
}


function showPage () {
	
}
var clicked_link;


