<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
<link rel="stylesheet" type="text/css" href="css/projects.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>

<div class="website">

<a href="#menu" id="toggle"><span></span></a>

<div id="menu">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>

<h1 class="title">Projects</h1>
<h5 class="subtext">Click on a picture to enlarge. Click again to return to page.</h5>

<section>
    
       <img src="images/yuli_index.png" style="cursor:pointer" onclick="showImage('images/yuli_index.png');" />
        <img src="images/yuli_projects.png" style="cursor:pointer" onclick="showImage('images/yuli_projects.png');" />
 
        <div id="largeImgPanel" onclick="hideMe(this);">
            <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
        </div>



<div class="description">
    <h4>Description</h4>
    <p>This is the first Website I built using HTML and bootstrap. Consists of a home page, projects page and a contacts page</p>
    <a href="../website/index.html">Click Here to see Website</a>
</div>
</section>

<section class="blog">
    <h2>Blog</h2>
    <img src="images/blog_index.png">
<div class="description">
    <h4>Description</h4>
    <p>This is a blog I built using PHP and also bootstrap. You can sign-up and login to post something.</p>
    <a href="../Blog/amit1.php">Click Here to see Blog</a>
 </div>   
</section>

<section class="awesome">
    <h2 class="game">Game Project: Awesomenauts</h2>
    <img src="images/awesome.png" style="cursor:pointer" onclick="showImage('images/awesome.png');" />

<div class="description">
    <h4>Description</h4>
    <p>A game I made using PHP and Javascript. You can login and signup inorder to save your progress.</p>
    <a href="../YulitzaSAwesomenauts/">Click Here to see Awesomenauts</a>
</div>
</section>

<section class="todo">
    <h2 class="game">Todo: Task List</h2>
   <!--  <img src="images/todo.png"> -->
         <img src="images/todo.png" style="cursor:pointer" onclick="showImage('images/todo.png');" />
        <img src="images/todo_login.png" style="cursor:pointer" onclick="showImage('images/todo_login.png');" />
        <img src="images/todo_register.png" style="cursor:pointer" onclick="showImage('images/todo_register.png');" />
 
        <div id="largeImgPanel" onclick="hideMe(this);">
            <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
        </div>
<div class="description">
    <h4>Description</h4>
    <p>A web app I made using PHP and Javascript. You can login and signup in order to save your progress.</p>
    <a href="../todo-list2/home.php">Click Here to see Todo Task List</a>
</div>
</section>

<section class="awesome">
    <h2 class="game">API Project: Instagram</h2>
    <img src="images/instagram_login.png" style="cursor:pointer" onclick="showImage('images/instagram_login.png');" />
    <img src="images/instagram_pics.png" style="cursor:pointer" onclick="showImage('images/instagram_pics.png');" />

<div class="description">
    <h4>Description</h4>
    <p>A API project I made using PHP and Instagram's API. You can login to your instagram in order to see the pictures you've posted.</p>
    <a href="../appacademyapi/index.php">Click Here to see Awesomenauts</a>
</div>
</section>

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


//enlarges images
 function showImage(imgName) {
                document.getElementById('largeImg').src = imgName;
                showLargeImagePanel();
                unselectAll();
            }
            function showLargeImagePanel() {
                document.getElementById('largeImgPanel').style.visibility = 'visible';
            }
            function unselectAll() {
                if(document.selection) document.selection.empty();
                if(window.getSelection) window.getSelection().removeAllRanges();
            }
            function hideMe(obj) {
                obj.style.visibility = 'hidden';
            }
</script>


 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>