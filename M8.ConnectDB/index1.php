<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Kết nối CSDL MySQL</h1>

<?php
$serverIPDatabase = "localhost";
$serverDatabaseUsername ="root";
$serverDatabasePassword = "";
$databaseName = "demo1";

/*
 * Tạo ra 1 biến connection
 * */
$connection = new mysqli($serverIPDatabase,$serverDatabaseUsername,$serverDatabasePassword,$databaseName);

/*
 * Kiểm tra kết nối đến CSDL*/
if ($connection ->connect_errno){
    /*
     * Ngắt chương trình khi mà kết nối thất bại*/

    die("Kết nối đến CSDL thất bại");
}
echo "<br> Kết nối thành công";
?>
</body>
</html>
