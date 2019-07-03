
<?php
function helloWord($str) {
    echo "<br> Hello".$str;
}
/**
 * Lambda Hàm không tên
 * @param $str
 *
 */
/**
 * Khi gán lambda cho 1 biến thì phải kết thúc ngoặc ngọn bằng ;
 * @param $str
 */
$hello = function($str) {
    echo "<br> Hello ".$str;
};
// Gọi lambda khi được gán vào biến
$hello("World");