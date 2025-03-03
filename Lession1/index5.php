<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tìm kiếm sản phẩm</h2>
    <form action="ketquatimkiem.php" method="GET">
        <table>
            <tr>
                <td><label>Tên sản phẩm</label></td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td><label>Loại sản phẩm</label></td>
                <td>
                    <select name="product_type">
                        <option value="">-- Chọn loại --</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Asus">Asus</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Giá sản phẩm</label></td>
                <td><input type="number" name="product_price" min="0"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Tìm Kiếm</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>