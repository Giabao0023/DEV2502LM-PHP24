<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo if</title>
    <style>
        *{
            font-size: 1.5 rem;
        }
    </style>
</head>
<body>
    <h1>If demo</h1>
    <?php
        $num = 10;
        #if đơn
        if($num > 0){
            echo "<p> $num là số dương</p>";
        }
        #if else
        # kiểm tra num là số chẵn hay số lẻ
        if($number % 2 == 0){
            echo "<p> $num là số chẵn</p>";
        }else{
            echo "<p> $num là số lẻ</p>";
        }
        #if bậc thang
        if($number > 0){
            echo "<p> $num là số dương</p>";
        }else if($number < 0){
            echo "<p> $num là số âm</p>";
        }else{
            echo "<p> $num là số 0</p>";
        }

        #if lồng nhau
        #nếu giá trị của num là số dương, thực hiện kiểm tra xem num có phải là số chẵn hay số lẻ
        if($num > 0){
            if($num % 2 == 0){
                echo "<p> $num là số chẵn</p>";
            }else{
                echo "<p> $num là số lẻ</p>";
            }
        }

?>
</body>
</html>