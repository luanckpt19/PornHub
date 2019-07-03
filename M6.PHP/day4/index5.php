<?php

$arr1 = array(24, 7, 28, 100, 1, 7, 9);
/**
 * Sắp xếp lại mảng theo thứ tự giảm dần
 * sử dụng hàm rsort();
 */
echo "<pre>";
print_r($arr1);
echo "</pre>";
rsort($arr1);
echo "<pre>";
print_r($arr1);
echo "</pre>";