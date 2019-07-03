<?php
/**
 * Created by PhpStorm.
 * Yêu cầu : Xây dựng class tên là Database
 * có 1 thuộc tính là connection để lưu trữ kết nội đến CSDL
 * và có 4 thuộc tính : ip database ( localhost ) , user db , pass db , tên CSDL
 * Class này có 1 method khởi tạo là __construct() làm nhiệm vụ kết nội đến CSDL
 * constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
 * và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
 *
 */
class Database {
    public static $connection;
    private static $ipDatabase;
    private static $userDatabase;
    private static $passDatabase;
    private static $databaseName;
    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        self::$ipDatabase = $ipDatabase;
        self::$userDatabase = $userDatabase;
        self::$passDatabase = $passDatabase;
        self::$databaseName = $databaseName;
        self::$connection = new mysqli($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }
    public static function disconnect() {
        mysqli_close(self::$connection);
    }
}