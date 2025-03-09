<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển số tháng thành chữ</title>
</head>
<body>
    <h2>Nhập vào số tháng để chuyển thành chữ</h2>
    <form method="post">
        <label for="num">Nhập số tháng (1-12):</label>
        <input type="number" name="num" id="num" min="1" max="12" required>
        <button type="submit">Tìm tháng</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $thang = "";

        switch ($num) {
            case 1: $thang = "Tháng một"; break;
            case 2: $thang = "Tháng hai"; break;
            case 3: $thang = "Tháng ba"; break;
            case 4: $thang = "Tháng tư"; break;
            case 5: $thang = "Tháng năm"; break;
            case 6: $thang = "Tháng sáu"; break;
            case 7: $thang = "Tháng bảy"; break;
            case 8: $thang = "Tháng tám"; break;
            case 9: $thang = "Tháng chín"; break;
            case 10: $thang = "Tháng mười"; break;
            case 11: $thang = "Tháng mười một"; break;
            case 12: $thang = "Tháng mười hai"; break;
            default: $thang = "Số tháng không hợp lệ"; break;
        }

        echo "<p>Kết quả: $thang</p>";
    }
    ?>
</body>
</html>
