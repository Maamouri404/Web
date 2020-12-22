<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$query = $db->query("SELECT * FROM templates");

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $imageURL = 'assets/images/listtemp/' . $row["file_name"];

        echo ('<div class="col-sm-6 col-md-6 col-lg-5ths">
        <div class="product-item style3">
            <div class="product--img">
                <img class="imgfill" src="' . $imageURL . '.jpg" alt="product" />
                <div class="product--hover">
                    <div class="product--action">

                        <a data-toggle="modal" data-target="#product-popup" onclick="fct('.$row["file_name"].')"><i class="fas fa-eye"></i></a>
                        <a href=" download.php?name=templates/' . $row["file_name"] . '.docx "><i class="fa fa-arrow-down"></i></a>
                        <a href="delete.php?name=' . $row["file_name"] . '"><i class="fas fa-trash"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>');
    }
}