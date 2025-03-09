<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop demo</title>
</head>
<body>
    <h1>Loop Demo</h1>
    <hr>
    <?php
    #in ra các số nguyên từ 1 đến 10
    for ($i = 1; $i <= 10; $i++) {
        echo "$i; ";
    }

    #while 
    echo "<p> while:";
    $i =1;
    while ($i <= 10) {
        echo "$i; ";
        $i++;
    }

    #do...while
    echo "<p> do...while:";
    $i = 1;
    do{
        echo "$i; ";
        $i++;
    }while ($i <= 10);

    #foreach
    $arr = ["Hùng", "Hoa", "Huy", "Hà"];
    echo "<p>";
    foreach ($array as $item) {
        echo "$item; ";
    }
    echo"<p>";
    print_r($array);
    ?>
</body>
</html>