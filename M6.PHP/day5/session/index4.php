<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Cách thay đổi 1 session trong php</h1>

<?php
//tạo ra 1 session trong php
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";
$_SESSION["user_location"] = "hà lội";

//xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

//in ra từng session trong $_SESSION
echo "<br> tên người dùng: ".$_SESSION["user_name"];
echo "<br> email người dùng:".$_SESSION["user_email"];

$_SESSION['user_location'] = 'Hồ Chí Minh';

//xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

echo "<br> địa điểm của người dùng: " .$_SESSION['user_location'];
?>
</body>
</html>
