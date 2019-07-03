<?php
if (isset($_POST)) {
    $weight = $height = 0;
    if (isset($_POST['height']) && is_numeric($_POST['height']) && ($_POST['height'] > 0)) {
        $height = $_POST['height'];
    }
    if (isset($_POST['weight']) && is_numeric($_POST['weight']) && ($_POST['weight'] > 0)) {
        $weight = $_POST['weight'];
    }
    if ($weight && $height) {
        $index_bmi = $weight/ ($height*$height);
        $index_bmi = round($index_bmi, 3);
        if ($index_bmi < 18.5) {
            $result = "Gầy";
        } elseif (($index_bmi >= 18.5) && ($index_bmi <= 24.9)) {
            $result = "Bình thường";
        } elseif (($index_bmi >= 25) && ($index_bmi <= 29.9)) {
            $result = "Hơi béo";
        } elseif (($index_bmi >= 30) && ($index_bmi <= 34.9)) {
            $result = "Béo phì cấp độ 1";
        } elseif (($index_bmi >= 35) && ($index_bmi <= 39.9)) {
            $result = "Béo phì cấp độ 2";
        } elseif ($index_bmi >= 40 ) {
            $result = "Béo phì cấp độ 3";
        } else {
            $result = "Không xác định được";
        }
    } else {
        $message = 'Hãy nhập lại dữ liệu. Dữ liệu bạn nhập không đúng chiều cao và cân nặng phải là một số';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project BMI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Project tính toán chỉ số Body Mass Index</h1>
        <p>
            Thông qua chỉ số BMI (Body Mass Index) bạn có thể biết chính xác mình đang mắc bệnh béo phì, thừa cân hay suy dinh dưỡng.
        </p>
        <p>
            Công thức 1: Chỉ số khối Quetelet. Theo Bright Side, đây là phương pháp đơn giản và chính xác để xác định trọng lượng tối ưu cho cả nam và nữ ở độ tuổi từ 20-65, trừ phụ nữ mang thai và cho con bú, vận động viên.
        </p>

        <p>
            <img src="bmi.PNG">
        </p>

        <p>
            <img src="bmi2.PNG">
        </p>

        <p>
            Chẳng hạn, nếu chiều cao của bạn là 170 cm, cân nặng là 65 kg. Chỉ số BMI của bạn = 65 : (1.7 x 1.7) = 22,5. Giá trị BMI tối ưu cho nam giới là 18.5-24.9, trong khi phụ nữ là 19-24.
        </p>

        <p>
            Đơn vị cân nặng là kilogam
        </p>

        <p>
            Đơn vị chiều cao là mét : ví dụ cao 182 cm = 1.82 mét
        </p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <form name="bmi" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Chiều cao ( M ) : </label>
                    <?php $val_height = isset($_POST['height']) ? $_POST['height'] : ''; ?>
                    <input required name="height" type="text" class="form-control" placeholder="Nhập chiều cao theo đơn vị mét" value="<?php echo $val_height; ?>">
                </div>
                <div class="form-group">
                    <label>Cân nặng (KG) : </label>
                    <?php $val_weight = isset($_POST['weight']) ? $_POST['weight'] : ''; ?>
                    <input required name="weight" type="text" class="form-control" placeholder="Nhập cân nặng theo đơn vị kilogam" value="<?php echo $val_weight; ?>">
                </div>
                <div class="form-group">
                    <label>Chỉ số khối cơ thể</label>
                    <?php if (isset($index_bmi)) : ?>
                        <p class="help-block"><?php echo $index_bmi; ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Kết quả</label>
                    <?php if (isset($result)) : ?>
                        <p class="help-block"><?php echo $result; ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-default">Tính BMI</button>
            </form>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</div> <!-- /container -->




</body>
</html>
