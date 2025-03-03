<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        echo "<b>Bài Thực hành 02:</b> khai báo biến trong PHP và xác định kiểu dữ liệu trong PHP, chuyển đổi kiểu dữ liệu trong PHP<br><br>";
        echo "<h2>Khai báo sử dụng biến trong PHP</h2>";

        $a = 11.5;
        echo "Khai báo biến a = $a giá trị của biến a là $a<br>";
        echo "Kiểu giá trị của biến a là " . gettype($a) . "<br><br>";

        $b = (int)$a;
        echo "Chuyển đổi kiểu dữ liệu của biến a về kiểu số nguyên<br>";
        echo "Biến a đã chuyển đổi từ kiểu Double về kiểu nguyên $b -- " . gettype($b) . "<br><br>";

        echo "Chuyển đổi biến a từ double về int của biến a<br>";
        $a = (double) 11.0;
        echo "Biến sau khi đã chuyển đổi có giá trị là $a và kiểu " . gettype($a) . "<br><br>";

        echo "Chuyển đổi biến a từ kiểu double sang kiểu string<br>";
        $c = (string)$a;
        echo "Biến a sau khi đã chuyển đổi từ kiểu double sang string có giá trị '$c' và kiểu dữ liệu " . gettype($c) . "<br>";
    ?>
</body>
</html>
