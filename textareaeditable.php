<!DOCTYPE html>
<html>
<head>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Bibliotecas -->
<script src="functions/XMLWriter-1.0.0.js"></script>
<!-- folhas de JS -->
<script src="functions/functions.js"></script>

<title>div editable</title>
</head>
<body>
<div id="myDiv" class="editavel"> <a href="google">yolo</a> </div>
<div contenteditable="true">Anything inside this div will be editable!</div>
</body>
</html>
<script>

$( "#myDiv" ).click(divClicked);


//função para o click e não click
function divClicked() {
	var editableText = $("<textarea />");
	editableText.val($(this).html());
	$(this).replaceWith(editableText);
  	editableText.focus();
  	editableText.blur(editableTextBlurred);
}

function editableTextBlurred() {
	 // Preserve the value of textarea
    var html = $(this).val();
    // create a dynamic div
    var viewableText = $("<div id='myDiv'> ");
    // set it's html 
    viewableText.html(html);
    // replace out the textarea
    $(this).replaceWith(viewableText);
}

</script>