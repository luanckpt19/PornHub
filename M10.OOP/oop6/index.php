<?php
/**
 * Created by PhpStorm.
 * User: Giang Vien T3H
 * Date: 6/16/2019
 * Time: 7:56 PM
 */
include_once "database.php";
$db = new Database("localhost", "root", "", "oop");
// gọi static method
Database::disconnect();
// truy cập thuộc tinh static
$connect = Database::$connection;
/**
 * Với thuộc tính static và method static chúng ta có thể gọi mà không cần khởi tạo
 * đối tượng như sau :
 * Database::disconnect();
 * $connect = Database::$connection;
 */