<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
// nạp file kết nối CSDL
include_once "config.php";
$sqlSelect = "SELECT * FROM employees";
/**
 * Thực hiện câu truy vấn và trả data cho biến $result
 */
$result = $connection->query($sqlSelect);
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê danh sách nhân viên</h1>
            <h1>
                <a href="create.php" class="btn btn-success">Thêm mới nhân viên</a>
            </h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                    <th>Lương</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /**
                 * Nếu $result->num_rows > 0 tức là có dữ liệu trong bảng
                 * ngược lại là bảng đang rỗng
                 */
                if ($result->num_rows > 0) {
                    /*
                     *
                     * Sử dụng $result->fetch_assoc() để lấy về từng dòng bản ghi trong bảng
                     * và trả về cho biến $row
                     */
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["address"] ?></td>
                            <td><?php echo $row["salary"] ?></td>
                            <td>
                                <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa nhân viên</a> </p>
                                <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa nhân viên</a> </p>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Không tồn tại nhân viên nào";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>