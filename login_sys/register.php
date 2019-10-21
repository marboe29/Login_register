
<?php
require "login_header.php";
?>

<main>
<div id="register">

<?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="regerror">Fill in all fields </p>';
            }
            else if ($_GET["error"] == "invalidemailuid") {
              echo '<p class="regerror">Invalid name & email </p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="regerror">Your passwords dont match </p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="regerror">Username in use </p>';
            }
          }
// error message if the user made an error trying to register. ref to register.inc.php        
          else if (isset($_GET["register"])) {
            if ($_GET["register"] == "success") {
              echo '<p class="regsuccess">register success</p>';
            }
          }
// success message if the new user was created
?>
 
   <form class="box animate" action="includes/register.inc.php" method="POST">
   <div class="img">
      <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
   
	  <label for="username"><b>Username</b></label>
	  <input type="text" placeholder="Enter Username" name="username" required>
<br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
<br>
    <label for="pss"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
<br>
    <label for="pss-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    
    <button type="submit" name="register-submit" class="registerbtn">Register</button>

  <div class="container login">
    <p>Already have an account? <a href="#">Login</a>.</p>
  </div>
</div>
</div>
</form>
</div>
<script>

var modal = document.getElementById('register');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</main>
