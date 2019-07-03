<?php
/**
* class (lớp)
 * object (đối tượng)
 * instance (thể hiện của 1 class ) đối tượng cụ thể
 * class Người
 * đối tượng hay instance là Luân
 */
class Student{
    /**
    Thuộc tính trong hướng đối tượng
     * là tính chất của class đó
     */

    public $name;

    public $age;

    public $location;

    public $point;

    /**
      * Phương thức đầu tiên của class
     * Phương thức khởi tạo__construct()
     * từ class mà không cần gọi trực tiếp
     * Hàm thì nằm ngoài class
     * còn phương thức method nằm trong class
     * method chính là hàm bên trong class
     */
    public  function __construct($name_param , $age_param , $location_param)
    {
        //Gán tham số truyền vào thuộc tính của class
        /**
        Trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->tên_thuộc_tính nhwung chú ý là tên thuộc tính
         * không có $
         * $this->$name (viết sai)
         * $this->name (Viết đúng rồi )
         */
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;
        /**
        __Method__là magic method cho ta biết
         * phương thúc nào đang được gọi
         */
        echo "<br>__Method__".__METHOD__;
    }
    /**
    Xây dụng phương thức khác
     */
    public function printInfo(){
        echo "<br>__METHOD__".__METHOD__;
        echo "<br> Tên của sinh viên: ".$this->name;
        echo"<br> Tuổi của sinh viên: ".$this->age;
        echo"<br> Quê hương của sinh viên: ".$this->location;
    }
}//kết thúc clas
/**
Khởi tạo đối tượng cụ thể của class
 * Sử dụng từ khóa new tên_class()
 */
$luan = new Student("luan","21","Phú Thọ");
echo "<br> Gọi đến method printInfo()";
/**
Gọi 1 phương thức
 */
$luan->printInfo();
/**
Gọi 1 số thuộc tính bên trong class
 */
echo"<br> In ra tên của sinh viên bên ngoài class".$luan->name;
echo"<br> In ra tuổi của sinh viên bên ngoài class".$luan->age;
echo"<br> In ra quê hương của sinh viên bên ngoài class".$luan->location;

echo "<br> In ra cấu trúc bên trong của class";
/**
Xem cấu trúc của 1 class
 * thì sử dụng hàm print_r()
 */
echo"<pre>";
print_r($luan);
echo"<pre>";

// Gọi đến phương thúc calculatePoint()
$point = array(
    'java'=>5,
    'database' => 3,
    'php' => 5,
    'menu' =>7.5,
);
//gọi đến phương thúc của class
$luan->calculatePonint($point);
echo "<br>diem trung binh:" .$luan->point;