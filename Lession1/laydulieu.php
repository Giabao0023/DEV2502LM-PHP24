<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Thông tin người dùng</h2>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $hobbies = isset($_POST["hobbies"]) ? implode(", ", $_POST["hobbies"]) : "Không có";
        $province = $_POST["province"];
        $description = $_POST["description"];

        echo "<table>";
        echo "<tr><td><b>Tên đăng nhập:</b></td><td>$username</td></tr>";
        echo "<tr><td><b>Mật khẩu:</b></td><td>$password</td></tr>";
        echo "<tr><td><b>Họ và Tên:</b></td><td>$fullname</td></tr>";
        echo "<tr><td><b>Email:</b></td><td>$email</td></tr>";
        echo "<tr><td><b>Giới tính:</b></td><td>$gender</td></tr>";
        echo "<tr><td><b>Sở thích:</b></td><td>$hobbies</td></tr>";
        echo "<tr><td><b>Tỉnh thành:</b></td><td>$province</td></tr>";
        echo "<tr><td><b>Mô tả:</b></td><td>$description</td></tr>";
        echo "</table>";
    } else {
        echo "<p>Dữ liệu không hợp lệ!</p>";
    }
?>

</body>
</html>