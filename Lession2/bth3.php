<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê số chẵn, lẻ và tính tổng</title>
</head>
<body>
    <h2>Hiển thị danh sách số lẻ, số chẵn và tổng tương ứng</h2>
    <form method="post">
        <label for="number">Nhập số bất kỳ:</label>
        <input type="number" name="number" id="number" min="1" required>
        <button type="submit">Xử lý</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sochan = $sole = "";
        $tongchan = $tongle = 0;
        $i = 1;

        while ($i <= $number) {
            if ($i % 2 == 0) {
                $sochan .= $i . " ";
                $tongchan += $i;
            } else {
                $sole .= $i . " ";
                $tongle += $i;
            }
            $i++;
        }

        echo "<p><strong>Danh sách số chẵn:</strong> $sochan</p>";
        echo "<p><strong>Tổng các số chẵn:</strong> $tongchan</p>";
        echo "<p><strong>Danh sách số lẻ:</strong> $sole</p>";
        echo "<p><strong>Tổng các số lẻ:</strong> $tongle</p>";
    }
    ?>
</body>
</html>
