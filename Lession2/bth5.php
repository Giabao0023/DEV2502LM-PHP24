<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Đa Ngôn Ngữ</title>
    <style>
        #main {
            height: 35px;
            background: #ccc;
            margin: 0 auto;
            width: 800px;
            position: relative;
        }
        #main ul {
            list-style: none;
            padding: 0;
            margin: 0;
            float: left;
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
        #language {
            right: 0;
            position: absolute;
        }
    </style>
</head>
<body>

<?php
// Xác định ngôn ngữ, mặc định là Tiếng Việt
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'vi';

// Tạo menu theo ngôn ngữ
if ($lang == "vi") {
    $arrMenu = array(
        "home" => "Trang chủ",
        "about" => "Giới thiệu",
        "product" => "Sản phẩm",
        "service" => "Dịch vụ",
        "contact" => "Liên hệ"
    );
} else {
    $arrMenu = array(
        "home" => "Home",
        "about" => "About",
        "product" => "Products",
        "service" => "Services",
        "contact" => "Contact"
    );
}

// Xác định menu đang chọn
$activePage = isset($_GET['view']) ? $_GET['view'] : 'home';
?>

<div id="main">
    <ul>
        <?php
        foreach ($arrMenu as $key => $value) {
            // Kiểm tra nếu menu đang active
            $selected = ($key == $activePage) ? "class='selected'" : "";
            echo "<li><a href='index.php?view=$key&lang=$lang' $selected>$value</a></li>";
        }
        ?>
    </ul>

    <!-- Chuyển đổi ngôn ngữ -->
    <div id="language">
        <a href="index.php?lang=vi" <?= ($lang == "vi") ? "class='selected'" : "" ?>>VI</a> |
        <a href="index.php?lang=en" <?= ($lang == "en") ? "class='selected'" : "" ?>>EN</a>
    </div>
</div>

</body>
</html>
