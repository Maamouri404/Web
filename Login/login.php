<?php

 // Enable us to use Headers
 ob_start();

 // Set sessions
 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1 && !empty($myusername)&&!empty($mypassword)) {
        session_start();
        $_SESSION['login_user'] = $myusername;
        header('Location:http://localhost/projet_web/home/home-6.php');
    } else {
        header("Location:http://localhost/projet_web/login/log.php?type=error&message=Invalid Username Or Password !");
      
        
       
    }
}