<?php
function helloword($str){
    echo"br> Hello".$str;
}

/*
 * Lambda Hàm không tên
 * @param $str
 *
 *
 * */

/*
 * Clouse là lambde nhưng có thể sử dụng những biến bên ngoài
 * @param $str*/

$lang = "PHP";

$hello = function ($str) use ($lang){
    echo "<br> Hello".$str.$lang;
};
//Gọi lambda khi được gàn vào biến
$hello("World");
?>