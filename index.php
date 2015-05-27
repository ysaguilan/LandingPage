
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


  <title>My Landing Page</title>

</head>
<body>
<a href="#menu" id="toggle"><span></span></a>

<div id="menu">
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>


<!--  -->

<h1>My Landing Page</h1>

<img class="image" src="images/testing.jpg"><!-- class="image" -->
<h3 class="instruct">click picture to reveal about me</h3>
<div class="aboutme"><!-- class="aboutme" -->
  <div class="body">
<h2>About Me</h2>
<p>This is my landing page This is my landing pageThis is my landing pageThis is my landing pageThis is my landing page
This is my landing pageThis is my landing pageThis is my landing pageThis is my landing pageThis is my landing page</p>
</div>
</div>
<script>
//this is for collapsible menu
var theToggle = document.getElementById('toggle');

// based on Todd Motto functions
// http://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}

// for image click event to show about me info
function showText() {
  var image = document.querySelector(".aboutme");
  image.style["display"] = "block";
}

// add event listener to text
var pic = document.querySelector(".image");
pic.addEventListener("click", showText, false);


//hide attempt for bio info
function hideText() {
  var instruction = document.querySelector(".instruct");
  instruction.style["display"] = "block";
}

var instr = document.querySelector(".image");
instr.addEventListener("click", showText, true);


</script>

</body>
</html>
<?php 
 ?>