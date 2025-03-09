<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Demo</title>
</head>
<body>
    <h1>Switch Demo</h1>
    <?php
        echo"<h2>";
        echo "<p>1. Kiểm tra số ngày trong tháng</p>";
        # cho 1 số nguyên dương 1-7 => in ra thử trong tuần
        $num =1;
        echo date( "Y-m-d H:i:s");
        echo "<p> $dayOfweek";
        switch ($num) {
            case 1:
                echo "<p>Thứ hai</p>";
                break;
            case 2:
                echo "<p>Thứ ba</p>";
                break;
            case 3:
                echo "<p>Thứ tư</p>";
                break;
            case 4:
                echo "<p>Thứ năm</p>";
                break;
            case 5:
                echo "<p>Thứ sáu</p>";
                break;
            case 6:
                echo "<p>Thứ bảy</p>";
                break;
            case 7:
                echo "<p>Chủ nhật</p>";
                break;
            default:
                echo "<p>Không phải ngày trong tuần</p>";
                break;
        }
    ?>
</body>
</html>