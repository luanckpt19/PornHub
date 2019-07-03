<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> phạm vi của biến</h1>r
<pre>
    -biến cục bộ: chỉ có ảnh hưởng và chỉ sử dụng được trong 1 không gian nhất định
    -Biến toàn cục:  có ảnh hưởng và sử dụng được ở mọi nơi
    -Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ sử dụng biến toàn cục
    ***
    Tham số khi khai báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
    ví dụ như là biến $r là biến cục bộ
</pre>

// biến toàn cục
$r = 100;
/*
* Khai báo hàm với $r là tham số cần truyền vào
*/
<?php
function tinhchuvihinhtron($r = 10) {
// $chuvi là biến cục bộ
$chuvi = 3.14*$r*2;
return $chuvi;
}
// gọi hàm
// Biến $ketqua bên ngoài hàm là biến toàn cục
$ketqua = tinhchuvihinhtron(15);
echo "<br> chu vi hình tròn là: " . $ketqua;

?>
</body>
</html>
