<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = array("one","two","three","four","five");
        $b = array(10, "Mayank", 30.2);
        $c [0] = "20";
        $c [1] = "Rajkot";
        $c [2] = true;

        for($i = 0; $i<4; $i++){
            echo $a[$i]."<br>";
        }
        foreach($b as $value){
            echo $value."<br>";
        }
        print_r($c);
    ?>
</body>
</html>