<?php
/**
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 */
include_once "app/backend/category.php";
include_once "app/frontend/category.php";
/**
 * Cách số 2 mình sẽ phải import namespace
 * Nếu import 2 namespace có class cuối cùng giống tên nhau
 * thì vẫn lỗi
 * lúc này phải dùng bí danh
 */
use App\Backend\Category as ABC;
use App\Frontend\Category as AFC;
$category1 = new ABC();
$category2 = new AFC();
