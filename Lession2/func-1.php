<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hàm trong PHP</title>
</head>
<body>
    <h1>Hàm trong PHP</h1>
    <hr>
    <?php
         //Định nghĩa hàm
         function fn_Hi(){
            echo"<h2> Xin chào Devmaster</h2>";
         }

         echo fn_Hi();

         function fn_Welcom($name) {
            echo "<h2> Welcome to $name";
         }
         echo fn_Welcom("Gia Bảo");

         #Mảng trả về giá trị
         function fn_Add($a,$b){
            return $a+$b;
         }
         echo "<h1>" . fn_Add(3,4);
         echo "". fn_Add(5,6);
         
    ?>
</body>
</html>