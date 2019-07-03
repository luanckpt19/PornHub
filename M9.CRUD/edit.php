<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
/**
 * Nạp kết nối CSDL
 */
include_once "config.php";
/**
 * Lấy id từ trên url xuống
 */
$id = (int) $_GET["id"];
var_dump($id);
$sqlSelect = "SELECT * FROM employees WHERE id=".$id;
$result = $connection->query($sqlSelect);
$row = $result->fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";
?>




<?php
/**
 * Kiểm tra xem có dữ liệu submit đi hay không
 * !empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
 * isset($_POST) dùng để kiểm tra biến có tồn tại hay không
 */
if (isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])) {
    /**
     * Tạo ra 1 biến để check lỗi mặc định là rỗng
     */
    $errors = array();
    /**
     * !isset($_POST["name"]) => không tồn tại
     *  empty($_POST["name"]) => rỗng
     */
    if (!isset($_POST["name"]) || empty($_POST["name"])) {
        $errors[] = "Tên nhân viên không hợp lệ";
    }
    if (!isset($_POST["address"]) || empty($_POST["address"])) {
        $errors[] = "Địa chỉ nhân viên không hợp lệ";
    }
    if (!isset($_POST["salary"]) || empty($_POST["salary"])) {
        $errors[] = "Lương nhân viên không hợp lệ";
    }
    /**
     * $errors rỗng tức là không có lỗi
     */
    if (empty($errors)) {
        $id = (int) $_POST["employee_id"];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $sqlUpdate = "UPDATE employees SET name='$name',address='$address',salary=$salary WHERE id=$id";
        // Thực hiện câu SQL
        echo $sqlUpdate;
        $result = $connection->query($sqlUpdate);
        if ($result == true) {
            echo "<div class='alert alert-success'>
Sửa nhân viên thành công ! <a href='index.php'>Trang chủ</a>
</div>";
        } else {
            echo "<div class='alert alert-danger'>
Sửa nhân viên thất bại !
</div>";
        }
    }else{
        /**
         * Chuyển mảng $errors thành chuỗi = hàm implode()
         */
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên</h1>
            <form name="edit" action="" method="post">

                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">

                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $row["address"] ?>">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $row["salary"] ?>">
                </div>

                <button type="submit" class="btn btn-warning">sửa nhân viên</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>