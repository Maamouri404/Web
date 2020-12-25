<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$file = $_GET["name"];
$sql = $db->query('delete FROM templates where file_name="' . $file . '"');
mysqli_query($db, $sql);
unlink('./templates/'.$file.'.docx');
unlink('./assets/images/listtemp/'.$file.'.jpg');
header('Location:http://localhost/projet_web/home/template-list.php?type=warning&message=Template deleted successfully.');