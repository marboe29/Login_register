<?php
/* isset checks if user clicked the page what the user called resgister submit*/
if (isset($_POST['register-submit'])) {

require 'dbconnect.inc.php';

/* DB connection conn, fetch information when user signs up */
$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$passwordrepeat = $_POST ['password-repeat'];


/* checks if user had made errors/ left it empty */
if (empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
    header("location: ../register.php?error=emptyfields&uid=".$username."&email=".$email);
    exit();
/* sends user back with a error msg.. exits stops, (?) just adds extra data placeholder */
}
/* checks if sets a valid email & preg_match checks user match */ 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/[a-zA-Z0-9]/", $username)) {
    header("location: ../register.php?error=invalidemailuid&uid");
    exit();
}
/* checks if the two passwords that were enterd match each other */
else if ($password !== $passwordrepeat) {
    $password = md5($password);
    header("location: ../register.php?error=passwordcheck&uid=".$username."&email=".$email);
    exit();
}
/* checks if any matching users inside the database login_sys are in use, (?) placeholder*/
    else {
        $sql = "SELECT uidusers FROM users WHERE uidusers=? AND emailusers=?";
        $stmt = mysqli_stmt_init($conn);
     
/* checks for fails, (!) error handling */
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=sqlierror");
            exit();
        }
/* takes information form the user & send it to the database, data passing type s for string */
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
/* executes users data into the database checks(conntion), binds userswith two strings/parameters */
            mysqli_stmt_store_result($stmt);
/* stores into resulr from the database */
            $resultCheck = mysqli_stmt_num_rows($stmt);
/* checks if theirs a user in database followd by a redirect user/exit */
            if ($resultCheck > 0) {
                header("location: ../register.php?error=usertaken&email=".$email);
            exit();

/* signs up user into database */
     } else {
            $sql = "INSERT INTO users (uidusers, emailusers, pssusers) VALUES (?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../register.php?error=sqlierror");
                exit();
        } else {
/* 3 placeholders parameters sss, adds a hashed password key so wont show up within the database */
            $hashedpss = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpss);
            mysqli_stmt_execute($stmt);
            header("location: ../register.php?register=success&uid=".$username);
                exit();
            }
        }
    }
}
/* close statments */
mysqli_check_close($stmt);
mysqli_close($conn);
    
    }