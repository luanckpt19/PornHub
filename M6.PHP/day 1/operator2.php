<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Khi 1 biến trong php mà cộng , trừ , nhân , chia , chia lấy dư vói chính nó thì các bạn sẽ
    có cách viết rút gọn là chuyển toán tử lên trước dấu bằng
        $a = $a + 5; => $a += 5;
        $a = $a - 2; => $a -= 2;
        $a = $a * 3; => $a *= 3;
        $a = $a / 2; => $a /= 2;
        toán tử ++ là toán tử tăng thêm 1 đơn vị
        toàn tử -- là giảm đi 1 đơn vị
</pre>
<?php
$a = 5;
$a++;
echo "kết quả của em là ".$a ." nhé";
?>
</body>
</html>