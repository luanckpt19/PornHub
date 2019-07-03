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

    public $ipdatabase;

    public $userdb;

    public $passdb;

    public $namedb;


    public function __construct( $ipdatabase,$namedb,$passdb,$userdb)
    {
     $this->ipdatabase;
     $this->namedb;
     $this->passdb;
     $this->userdb;
     $this->connection = new mysqli($ipdatabase,$userdb,$passdb,$namedb);

     echo "<br>__METHOD__".__METHOD__;
    }
    public function disconnect(){
        mysqli_close($this->connection);
    }
}