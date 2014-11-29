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
		alert ("heu");
		titulo = document.forms["book-info"]["authorName"].value;
		categoria = document.forms["book-info"]["category"].value;
		titulo =  document.forms["book-info"]["bookName"].value;
		$("#loading").show ();
		$("#newBookPT1").hide();
		startBookInterace ();	
	}
	else {
		alert ("nada mau");
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