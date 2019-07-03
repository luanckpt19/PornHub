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
</pre>
<?php
$str ="chao ha noi";
echo "<br> strlen(): " . strlen($str);
echo "<br> str_word_count(): " .str_word_count($str);
?>
</body>
</html>