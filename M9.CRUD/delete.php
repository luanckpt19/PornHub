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
if (isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])) {

$errors = array();

    if (empty($errors)) {
        $id = (int) $_POST["employee_id"];

        $sqlDelete = "DELETE FROM employees WHERE id ='$id'";
        // Thực hiện câu SQL
        echo $sqlDelete;
        $result = $connection->query($sqlDelete);
        if ($result == true) {
            echo "<div class='alert alert-success'>Xóa thành công ! <a href='index.php'>Trang chủ</a></div>";
        } else {
            echo "<div class='alert alert-danger'> Xóa thất bại !</div>";
        }
    }else{

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
                <button type="submit" class="btn btn-warning">Xóa nhân viên</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
