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
var categoria = "";

var pages = new Array();
var linksPages = new Array();
var currentPage = 0;


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
		$("#loading").show ();
		$("#newBookPT1").hide();
		startBookInterace ();	
	}
	else {
	
		/**/
		//prob: ver se os livros existem e assim
	}
}

function startBookInterace () {
	$("#loading").hide();
	$("#newBookPT2").show();

}

function validateSearch () {
	alert ("yolo");
}

//criar XML
function test(){    
   xw.writeStartDocument(true);
   xw.writeElementString('book','diavagações 3');
   xw.writeAttributeString('autor','antonio olaio');
   xw.writeAttributeString('categorias','hypertext');
  };
/* save file => http://muaz-khan.blogspot.pt/2012/10/save-files-on-disk-using-javascript-or.html
function SaveToDisk(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_blank';
        save.download = fileName || 'unknown';

        var event = document.createEvent('Event');
        event.initEvent('click', true, true);
        save.dispatchEvent(event);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    }

    // for IE
    else if ( !! window.ActiveXObject && document.execCommand)     {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}*/

function endXML () {
	xw.writeEndDocument();
   console.log( v.flush() );
}