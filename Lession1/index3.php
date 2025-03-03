<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Đăng ký thành viên</h2>
    <form action="laydulieu.php" method="POST">
        <table>
            <tr>
                <td><label>Tên đăng nhập</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label>Mật khẩu</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><label>Họ và Tên</label></td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><label>Giới tính</label></td>
                <td>
                    <input type="radio" name="gender" value="Nam" checked> Nam
                    <input type="radio" name="gender" value="Nữ"> Nữ
                </td>
            </tr>
            <tr>
                <td><label>Sở thích</label></td>
                <td>
                    <input type="checkbox" name="hobbies[]" value="Đá bóng"> Đá bóng
                    <input type="checkbox" name="hobbies[]" value="Cầu lông"> Cầu lông
                    <input type="checkbox" name="hobbies[]" value="Du lịch"> Du lịch
                    <input type="checkbox" name="hobbies[]" value="Nghe nhạc"> Nghe nhạc
                    <input type="checkbox" name="hobbies[]" value="Bóng bàn"> Bóng bàn
                </td>
            </tr>
            <tr>
                <td><label>Tỉnh thành</label></td>
                <td>
                    <select name="province">
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Mô tả</label></td>
                <td><textarea name="description" rows="4"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Đồng ý</button>
                    <button type="reset">Làm lại</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>