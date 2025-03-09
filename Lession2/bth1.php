<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Giải phương trình bậc 2</h2>
    <form method="post">
        <label for="a">Số a:</label>
        <input type="number" name="a" required><br>

        <label for="b">Số b:</label>
        <input type="number" name="b" required><br>

        <label for="c">Số c:</label>
        <input type="number" name="c" required><br>

        <button type="submit">Giải Phương Trình</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a == 0) {
            echo "<p>Đây không phải là phương trình bậc 2!</p>";
        } else {
            $delta = $b * $b - 4 * $a * $c;

            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "<p>Phương trình có hai nghiệm phân biệt: x1 = $x1, x2 = $x2</p>";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                echo "<p>Phương trình có nghiệm kép: x = $x</p>";
            } else {
                echo "<p>Phương trình vô nghiệm!</p>";
            }
        }
    }
    ?>
</body>
</html>
