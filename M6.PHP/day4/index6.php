<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 <h1>Hàm PHP</h1>
<pre>
    Hàm là 1 tập hợp các dòng code để thực hiện 1 chức năng
    ví dụ như hàm tính chu vi hình tròn , hàm tính diện tích hình chữ nhật
    hàm xuất file PDF,...
    - thay vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng
    nhiều lần thì người ta sử dụng hàm. Để khi cần dùng thì chỉ cần gọi
    tên hàm và sủ dụng
    - Hàm khai báo bằng từ khóa function
    fuction ten_ham(tham_số 1, tham_số 2,...){
        //code chạt trong hàm

       //return có thể có hoặc không
       // và sẽ kết thúc hàm tại câu lệnh return

    return gia_tri;
}
    <pre>
        <?php
        function tinhchuvihinhtron($r){
            $chuvi = 3.14*$r*2;
            return $chuvi;
        }

        //gọi hàm
        $ketqua  = tinhchuvihinhtron(5);
        echo "<br>chu vi hình tròn là: " .$ketqua;

        function tinhdientichhinhtron($r2){
            $dientich =3.14*$r2*$r2;
            return $dientich;
        }
        $dapan = tinhdientichhinhtron( 6);
        echo "<br> diện tích hình tròn là: ".$dapan;
        ?>
</body>
</html>