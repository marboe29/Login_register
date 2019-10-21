<?php
$servername ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname = "login_sys";
/* DB connection, fetch information when user signs up */
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/* runs connection */
if ($conn == false){
        header("location: sitedown.php");
      }
  
  $conn->autocommit(true);
  
  error_reporting(E_ALL);
  
  ?>