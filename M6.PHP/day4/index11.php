<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Truyền tham chiếu và chuyền tham trị cho function</h1>

<pre>
    -truyền là chỉ truyền giá trị
    - truyền tham chiếu : hiểu 1 cách đơn giản là 1 biến cùng truyền vào 1 ô nhớ
    1 biến thay đổi thi biến kia cũng thay đổi theo

</pre>
<?php
// truyền tham trị
$a = 5;
 function truyenthamtri($b){
     $b =$b *2;

 }
    truyenthamtri($a);
 echo ' $a là ' .$a;

 $c= 10;
 function truyenthamchieu(&$d){
   $d =$d *2;
 }
 truyenthamchieu($c);
 echo'<br> $c là '.$c;
?>
</body>
</html>
