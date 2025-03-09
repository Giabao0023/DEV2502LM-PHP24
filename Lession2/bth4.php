<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu động với PHP</title>
    <style>
        #main {
            height: 35px;
            background: #ccc;
            margin: 0 auto;
            width: 800px;
        }
        #main ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #main ul li {
            float: left;
            border-right: solid 1px #fff;
        }
        #main ul li a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 8px 15px;
        }
        #main ul li a:hover,
        .selected {
            background: #792b90;
            color: #fff !important;
        }
    </style>
</head>
<body>

<?php
// Khai báo mảng menu
$arrMenu = array(
    "home" => "Trang chủ",
    "about" => "Giới thiệu",
    "product" => "Sản phẩm",
    "service" => "Dịch vụ",
    "contact" => "Liên hệ"
);

// Xác định menu đang được chọn
$activePage = isset($_GET['view']) ? $_GET['view'] : 'home';
?>

<div id="main">
    <ul>
        <?php
        $i = 0;
        foreach ($arrMenu as $key => $value) {
            $i++;
            // Kiểm tra nếu menu đang active
            $selected = ($key == $activePage) ? "class='selected'" : "";
            echo "<li><a href='index.php?view=$key' $selected>$value</a></li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
