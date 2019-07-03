<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Gán giá trị mặc định cho tham số</h1>
<pre>
        Nếu không truyền biến hoặc là giá trị cho tham số của hàm
        thì sẽ bị lỗi
        Fatal error: Uncaught ArgumentCountError:
        Too few arguments to function tinhchuvihinhtron(),
        0 passed in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php on line 25
        and exactly 1 expected in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php:18
        Stack trace: #0 E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php(25): tinhchuvihinhtron() #1
        {main} thrown in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php on line 18

        Để tránh điều này nếu trong 1 số trường hợp người ta sẽ gán giá tri mặc định
        cho tham số

    </pre>

<?php
/*
 * Khai báo hàm với $r là tham số cần truyền vào
 */
function tinhchuvihinhtron($r = 10) {
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
// gọi hàm
$ketqua = tinhchuvihinhtron(15);
echo "<br> Chu vi hinh tron là : " . $ketqua;
?>
</body>
</html>