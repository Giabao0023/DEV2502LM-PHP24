<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng 1 chiề<u></u></title>
</head>
<body>
    <h1>Mảng 1 chiều</h1>
    <hr>
    <?php
        $a=array("Xin", "chào", "Devmaster");
        print_r($a);
        echo"<p>";
        $a = array(5=>"Xin","chào","Devmaster");
        print_r($a);
        $a = ["Xin","chào","Devmaster"];
        echo"<p>";
        print_r($a);

        $a = [3=>"Xin",4=>"chào","Devmaster"];
        echo"<p>";
        print_r($a);
    
        #
        $countries = array("us"=>"United States","vn"=>"Viet Nam","jp"=>"Japan");
        echo"<p>";
        print_r($countries);
        #duyệt mảng
        echo "<p>";
        foreach($countries as $key => $value) {
            echo "<h2> key: $key <-> value: $value";
        }
        echo "<p>";
        foreach($countries as $value) {
            echo "<h2> $value";
        }

        #mảng 2 chiều
        $product = [
            ["Iphone",10,1000],
            ["Samsung",20,2000],
            ["Nokia",30,3000]
        ];
        #in ra màn hình
        foreach($product as $key => $value) {
            foreach($value as $item ) {
                echo " $item; ";
            }
            echo "<p>";
        }
        echo "<p>";
        for($row = 0; $row < count($product); $row++) {
            for($col = 0; $col < count($product[$row]); $col++) {
                echo  $product[$row][$col] .",";
            }
            echo "<p>";
        }
        echo "<p>";
        print_r($product);

        #arry_keys ($tên mảng)
        $keys = array_keys($countries);
        echo "<p>";
        print_r($keys);
        foreach($array_keys($countries) as $key) {
            echo "<p> $key";
        }

        foreach($array_values($countries) as $value) {
            echo "<p> $value";
        }
    ?>

</body>
</html>