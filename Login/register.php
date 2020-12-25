<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $myphone = mysqli_real_escape_string($db, $_POST['phone']);
    $mymail = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);
    $mypasswordc = mysqli_real_escape_string($db, $_POST['passwordc']);

    $sql = "INSERT INTO `admin`(`name`, `username`, `passcode`, `phone`, `email`) VALUES ('$name','$myusername','$mypassword','$myphone','$mymail')";
    if ($mypassword === $mypasswordc && !empty($_POST["cond"])&& !empty($_POST["name"])&& !empty($_POST["username"])&& !empty($_POST["phone"])&& !empty($_POST["phone"])&& !empty($_POST["email"])) {
        mysqli_query($db, $sql);

        header("Location:http://localhost/projet_web/login/log.php?type=success&message=Account Created ! Please Log In.. ");

    } else {
        header("Location:http://localhost/projet_web/login/log.php?type=error&message=Yebta fel Habta !");
    }
}