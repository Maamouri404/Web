<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$sql = "SELECT * FROM templates";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'templates/' . $filename;

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];

    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    // move the uploaded (temporary) file to the specified destination
    $imgname = $_FILES['myimg']['name'];
    $imgdestination = 'assets/images/listtemp/' . $imgname;
    $imgg = $_FILES['myimg']['tmp_name'];
    move_uploaded_file($imgg, $imgdestination);

    if (move_uploaded_file($file, $destination)) {
        $sql = "INSERT INTO templates (file_name) VALUES ('$withoutExt')";
        if (mysqli_query($conn, $sql)) {
            header('Location:http://localhost/projet_web/home/shop-layout-fullwidth.php?message=Template Added successfully');

        }
    } else {
        header('Location:http://localhost/projet_web/home/shop-layout-fullwidth.php?message=Failed to upload file.');

    }

}
