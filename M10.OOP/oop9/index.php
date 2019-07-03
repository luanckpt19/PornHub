
<?php
/**
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 */
include_once "app/backend/category.php";
/**
 * Cách số 2 mình sẽ phải import namespace
 */
use App\Backend\Category;
$category2 = new Category();
