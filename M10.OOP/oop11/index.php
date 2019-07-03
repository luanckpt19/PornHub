<?php

/*
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 * */
 include_once "app/backend/category.php";
 include_once "app/frontend/category.php";

 include_once "app/backend/post.php";

 use App\Frontend\Category;

 $categoty2 = new Category();
 $categoty2->callPost();
?>