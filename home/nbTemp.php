<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$query = $db->query("SELECT * FROM templates");

echo ('<h2><span>' . $query->num_rows . '</span>TEMPLATES FOUND</h2>');
