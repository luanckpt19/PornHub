
<?php
/**
 * Khai báo 4 hằng số kết nối CSDL
 */
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "appcrud");
/**
 * kết nối CSDL
 */
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($connection->connect_error == true) {
    die("Không thể kết nối đến CSDL");
}

