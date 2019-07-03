<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>các hàm sử lý chuỗi trong php</h1>
<pre>
    -strlen()đếm số ký tự trong chuỗi
    -str_word_count() đếm số chữ trong chuỗi
    -strpos() tìm kiếm sự có mặt của 1 chuỗi trong 1 chuỗi mẹ
    sẽ trả false nếu không tìm được
    trả về  vị trí bắt đầu của chuỗi con trong chuỗi mẹ
    -str_replace() thay thế chuỗi 1 bằng chuỗi 2 trong 1 chuỗi mẹ
    var_dump($bien): hàm này được dùng để debug xem cấu trúc của biến thuộc kiểu dữ liệu gì
    và chứa giá trị nào
</pre>
<?php
$find1 = strpos("thành phố hà nội chào mừng quý khách " , "hà nội");
var_dump($find1);
echo "<br>";
$find1 = strpos("thanh phố hà nội kính chào quý kháchh", "đà nẵng");
var_dump($find1);
?>
</body>
</html>