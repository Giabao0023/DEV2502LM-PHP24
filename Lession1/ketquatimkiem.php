<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Kết quả tìm kiếm</h2>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $product_name = isset($_GET["product_name"]) ? $_GET["product_name"] : "Không có";
        $product_type = isset($_GET["product_type"]) ? $_GET["product_type"] : "Không có";
        $product_price = isset($_GET["product_price"]) && $_GET["product_price"] !== "" ? $_GET["product_price"] : "Không có";

        echo "<table>";
        echo "<tr><td><b>Tên sản phẩm:</b></td><td>$product_name</td></tr>";
        echo "<tr><td><b>Loại sản phẩm:</b></td><td>$product_type</td></tr>";
        echo "<tr><td><b>Giá sản phẩm:</b></td><td>$product_price</td></tr>";
        echo "</table>";
    } else {
        echo "<p>Dữ liệu không hợp lệ!</p>";
    }
?>
</body>
</html>