<?php
trait Radio{

    public function listenRadio(){
        echo"<br>".__METHOD__;
    }
}
trait Ipod{
    public function listenMusic(){
        echo "<br>".__METHOD__;
    }
}
trait Computer{

    public function sendEmail(){
        echo"<br>".__METHOD__;
    }
    public function woed(){
        echo "<br>".__METHOD__;
    }
    public function webBrowser(){
        echo"<br>".__METHOD__;
    }
    public function playGame(){
        echo"<br>".__METHOD__;
    }
}
class ClassicPhone{

    public function callVoice(){
        echo"<br>".__METHOD__;
    }
    public function receiveVoidce(){
        echo"<br>".__METHOD__;
    }
}
class Smartphone extends ClassicPhone{

    //Khai báo các trait mà class này sẽ sử dụng
    /*
     * Từ khóa use nằm trong class là khai báo các trait nàu sẽ kế thừa
     * trait hỗ trợ đa kế thừa
     * Cần phân biệt với từ khóa use nằm ngoài class dùng để nạp namespace
     * */
    use Radio,Ipod,Computer;

    public function sendSms(){
        echo "<br>".__METHOD__;
    }
    public function receiveSms(){
        echo"<br>".__METHOD__;
    }
}
$samsung = new Smartphone();
//gọi đến method bên trong class
$samsung -> sendSms();
//gọi đến method của class cha
$samsung ->callVoice();

//gọi đến các phương thức của trait
$samsung->listenMusic();
$samsung->playGame();

?>