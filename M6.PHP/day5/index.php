<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        label {
            font-size: 20px;
            font-weight: bold;
            font-style: italic;
            color: wheat;
        }
        button{
            font-style: italic;
            font-weight: bold;
            width: 165px;
            background: #0aaefa;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 32px;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
Áp dụng kiến thức $_POST và $_GET xây dựng 1 form nhập
chiều cao theo mét và cân năng theo kg để tính ra chỉ số BMI và
tính toán xếp loại theo các chỉ số gầy béo bệnh tật theo link sau
https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
đọc lại bài viết nếu cần thiết
https://toidicode.com/phuong-thuc-get-va-post-trong-php-64.html
<?php
if (isset($_POST['height']) && is_numeric($_POST['height']) && ($_POST['height']>0)){
    $height = $_POST['height'];
}
if (isset($_POST['weight']) &&is_numeric($_POST['weight']) &&($_POST['weight']>0)){
    $weight = $_POST['weight'];
}
    if ($weight && $height) {
        $index_bmi = $weight/ ($height*$height);
        $index_bmi = round($index_bmi, 3);
        if ($index_bmi < 18.5) {
            $result = "Gầy";
            $message = " Cần ăn kết hợp uống thêm sữa or các loại thuốc bổ";
        } elseif (($index_bmi >= 18.5) && ($index_bmi <= 24.9)) {
            $result = "Body vừa đẹp";
            $message = " Đẹp rồi! ăn như bình thường thôi";
        } elseif (($index_bmi >= 25) && ($index_bmi <= 29.9)) {
            $result = "Hơi béo";
            $message = "Ăn bớt bớt lại ";
        } elseif (($index_bmi >= 30) && ($index_bmi <= 34.9)) {
            $result = "Béo phì cấp độ 1";
            $message ="Ăn ít thôi !";
        } elseif (($index_bmi >= 35) && ($index_bmi <= 39.9)) {
            $result = "Béo phì cấp độ 2";
            $message ="Ngày 1 bữa thôi!";
        } elseif ($index_bmi >= 40 ) {
            $result = "Béo phì cấp độ 3";
            $message ="404 error!!!<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i><br> Nhịn ăn được thì tốt ";
        } else {
            $result = "Không xác định được";
        }
    } else {
        $message = 'Hãy nhập lại dữ liệu. Dữ liệu bạn nhập không đúng chiều cao và cân nặng phải là một số';
    }


?>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <form name="bmi" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" name="height" value="" placeholder="Chiều cao (M)">
                <input type="text" name="weight" value="" placeholder="Cân nặng (Kg)">
            </div>
            <div class="form-group">
                <label>Chỉ số khối cơ thể là :</label>
                <?php if(isset($index_bmi)) : ?>
                   <p class="help-block"><?php echo $index_bmi?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Bạn thuộc mẫu người:</label>
                <?php if (isset($result)) : ?>
                    <p class="help-block"><?php echo $result; ?></p>
                <?php endif ;?>
            </div>
            <div>
                <label>Chế độ ăn uống của bạn : </label>
                <?php if (isset($message)) : ?>
                    <p class="help-block"><?php echo $message; ?></p>
                <?php endif ;?>
            </div>
            <button type="submit" >Tính BMI</button>


        </form>
    </div>
</div>
</div>
</body>
</html>