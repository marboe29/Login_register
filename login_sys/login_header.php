<?php
// starts a session which allow to store information as session variables.
require 'includes/dbconnect.inc.php';
  
$servername ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname = "login_sys";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
mysqli_query($conn,"set names utf-8");
 
if(isset($_POST['login-button'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
 // check for any empty inputs feilds    
    if (empty($username) || empty($password)) {
      header("Location: ../login_header.php?error=emptyfields&username=".$username);
      exit();
    } else {

    $sql="SELECT * FROM users WHERE uidusers='".$username."'AND pssusers='".$password."' limit 1";
    $result = mysql_query($sql);
    
    if (mysql_num_rows($result) == 1) {
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login reg</title>

	<link rel="stylesheet" href="style.css"/>

</head>
<body>
  
    <nav>
    <a href="#">
    </a>
<br>
    <img class="logo" src="hostel logo.png" alt="logo">
    <hr style="border-color:grey; width:80%; margin: auto; border-top: 0px;"/>
        <ul>
            <li><button><a href="booking_sys.php" style="text-decoration:none; color: inherit;">booking</a></button></li>
            <li><a href="login_header.php">home</a></li>
            <li><button><a href="gallary.php" style="text-decoration:none; color: inherit;">jQ/Zoom</a></button></li>
            <li><button id="login-b" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login/Register</button></li>
            
		</ul>
    <hr style="border-color:grey; width:60%; border-top: 0px;"/>
	</nav>

<div id="login" class="modal">

<form class="box animate" action="login_header.php" method="POST">
    <div class="img">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="hostel logo.png" alt="hostel logo" class="avatar">
     
    </div>
    
  <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username">
		<br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password">

      <button type="submit" name="login-submit">Login</button>
      <label>
        <span class="password">Forgot <a href="#">password?</a></span>
      </label>
      
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
		<a  id="reg-b" href="register.php"  style="width:auto;">Register</a>
  </div>
  </div>
</form>
</div>

<script>
var modal = document.getElementById('login');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</body>
</html>