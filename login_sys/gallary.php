<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login reg</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-last.min.js"></script>
<script type="text/javascript" src="js/jquery.mlens-1.7.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<style>
	
	.card {
    margin: auto;
    margin-top: 30%;
    box-shadow: 10px 10px 5px grey;
	}
	.inner {
		overflow: hidden;
	}
  .btn {
		margin-bottom: 15px
  }
  nav {
    margin-top:26px;
    margin-right: 40px;
  }
  #zoom {  
    cursor: zoom-in;
    transition: all 1.5s ease;
  }
  #zoom:hover {
  transform: scale(2.0); 
}





.img-zoom-lens {
  margin-top: -100px;
  cursor: zoom-in;
  width: 150px;
  height: 100px;
}
.img-zoom-result {
  width: 300px;
  height: 200px;
}

	</style>

<link rel="stylesheet" href="style.css"/>

</head>
<body>
<nav>
    <a href="#">
    </a>

    <img class="logo" src="hostel logo.png" alt="logo">
        <ul>
            <li><a href="login_header.php">home</a></li>
            <li><a href="login_header.php">home</a></li>
            <li><button><a href="gallary.php" style="text-decoration:none; color: inherit;">jQ/Zoom</a></button></li>
            <button id="login-b" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login/Register</button>
		</ul>
	</nav>
<div class="container text-center">
	<div class="row justify-content-center">
	



		<div class="col-md-4">
		<div class="card" style="width: 30rem;">
	<div class="inner">
  
  <img id="myimage" src="image1.png" alt="image" style="width: 30rem;"></div>
  <div id="myresult" class="img-zoom-result"></div>

<div class="card-body">
    <h5 class="card-title">hostel</h5>
    <p class="card-text">well it certainly wasn’t what I expected, but that’s not a bad thing. The hostel area itself is quite a welcoming area so you have to come prepared to do a lot of relaxing. 
    It is close to the town area with a nice river walk to guide you there and has a walk to the centre of NZ.</p>
    <br>
    <a href="#" class="btn btn-success">Go somewhere</a>
    <br>
  </div></div>





		</div>
		<div class="col-md-4">
		<div class="card" style="width: 30rem;">
  <div class="inner">
  <img id="zoom" src="images.png" class="card-img-top" alt="image" style="width: 30rem;">
  </div>
<div class="card-body">
    <h5 class="card-title">hostel</h5>
    <p class="card-text">as a business owner I’m constantly looking for new experiences to help reinforce what I provide to my customers. 
    The welcoming and facilities offered by the hostel were extraordinary and made me think about how to improve my customer relations.</p>
   <br>
    <a href="#" class="btn btn-success">Go somewhere</a>
    <br>
  </div></div></div>




		<div class="col-md-4">
  <div class="card" style="width: 30rem;">
	<div class="rel">
  <img src="image2.png" class="rel" alt="image" style="width: 30rem;">
  </div>
    <h5 class="card-title">hostel</h5>
    <p class="card-text">I think my grand mother is feeling pretty freaked out about the idea of staying in a hostel with the young people they usually attract. We didn’t realise just how inviting it was to all age groups. 
    Perhaps if we had known some things about it before hand we would have stayed at hostels before..</p>
    <br>
    <a href="#" class="btn btn-success">Go somewhere</a>
    <br>
  </div></div></div></div></div>


 <script type="text/javascript">

/*
function zoomIn(event) {
  var pre = document.getElementById(".zoom");
  pre.style.visibility = "visible";
// made it visibility hidden
// checking if the mouse is hovering over the first image having id 'zoom1'
  if ($('.zoom').is(':hover')) {
        var img = document.getElementById(".zoom");
		pre.style.backgroundImage = "url('images.png')";
  }
}
function zoomOut() {
  var pre = document.getElementById(".zoom");
  pre.style.visibility = "hidden";
}
*/

//img 1
function imageZoom(myImage, myResult) {
  var img, lens, result, cx, cy;
// Create lens, insert lens and calculates the ratio between result DIV and lens 
  img = document.getElementById(myImage);
  result = document.getElementById(myResult);
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  img.parentElement.insertBefore(lens, img);
// Sets background properties for the result DIV  
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
// Executes a function when someone moves the cursor over the image  
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);

function moveLens(e) {
    var pos, x, y;
// Gets cursors xy positions, calculates position of lens     
    e.preventDefault();
    pos = getCursorPos(e);
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
// Prevents the lens from being positioned outside the image    
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
// Sets position of the lens    
    lens.style.left = x + "px";
    lens.style.top = y + "px";
// Displays what the lens sees
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }

function getCursorPos(e) {
    var a, x = 0, y = 0;
//  xy positions of the image    
    e = e || window.event;
    a = img.getBoundingClientRect();
// cursors xy coordinates
    x = e.pageX - a.left;
    y = e.pageY - a.top;
// page scrolling
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}


 //img 3
$(function (){

  var mousein = function(){
// mouse hover opactiy gos from 0 to 1 which the height and width increases with a class index of 1
    $(this).css("opactiy", "0").addClass(".rel")
    .animate({height: "400px", width: "600px", opacity: "1"});
  }
  var mouseout = function(){
// mouse out removes class over which sets back to default width and height
    $(this).removeClass(".real")
    .animate({height: "200", width: "300"})}

  $(".rel").children().hover(mousein, mouseout);
// when children of the class rel are hoverd apond calls function mousein and mouseout

});

</script>

    <script>
// initiates the Zoom Effect from the two classes
imageZoom("myimage", "myresult");
    </script>

</body>
</html>