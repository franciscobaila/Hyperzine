
<p id="myParagraph" >This paragraph will be editable later.</p>

<script>
makeWYSIWYG(document.getElementById('myParagraph'));

function makeWYSIWYG(editor)
{

  //This function permits making the element editable or not
  editor.makeEditable = function(bool)
{
  //Protect the value
  bool = bool==undefined?true:(typeof bool === 'boolean'?bool:true);

  //Change the editable state
  this.isEditable=bool;
  this.setAttribute('contenteditable',bool);

  //Show/Hide the buttons
  if(bool)
  {
    buttons_container.querySelector('.makeWYSIWYG_buttons').style.display='block';
  }
  else
  {
    buttons_container.querySelector('.makeWYSIWYG_buttons').style.display='none';
  }
};

  //If the DOM element we want to edit exists
  if(editor)
  {
    //We create the buttons container
    var buttons_container = document.createElement('div');

    //We define some properties to it...
    buttons_container.style.textAlign='center';
    buttons_container.style.marginTop='5px';
    buttons_container.className='makeWYSIWYG_buttons_container';

    //We create the buttons inside the container
    buttons_container.innerHTML=''+
    '<button class="makeWYSIWYG_editButton">Edit</button>'+
    '<button class="makeWYSIWYG_viewHTML">View HTML</button>'+
    '<div class="makeWYSIWYG_buttons" style="display: none;">'+
    '<button><b>Bold</b></button>'+
    '<button><em>Italic</em></button>'+
    '<button><ins>Underline</ins></button>'+
    '<button><del>Strike</del></button>'+
    '<button>• Unordered List</button>'+
    '<button>1. Ordered List</button>'+
    '<button>Link</ins></button>'+
    '<button>Image</button>'+
    '<button>Main title</button>'+
    '<button>Subtitle</button><br />'+
    '<button>Remove format</button>'+
    '</div>';

    //[...]
  }


  var parent = editor.parentNode;

  if(parent.lastchild == editor)
  {
    parent.appendChild(buttons_container);
  }
  else
  {
    parent.insertBefore(buttons_container, editor.nextSibling);
  }

  return editor;
};
</script>
