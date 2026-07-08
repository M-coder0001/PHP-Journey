<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $a = array("name" => "Mayank", "age" => 20, "city" => "Rajkot");
    $b["salary"] = 10000;
    $b["class"] ="A";
    $c = array(10, "game" => "cricket", 3.5 );

    foreach($a as $x){
        echo "$x<br>";
    }
    echo "salary: ".$b["salary"]."<br>";

    foreach($c as $key => $value){
        echo "[$key] = $value<br>";
    }
    print_r($a);
    ?>

</body>
</html>