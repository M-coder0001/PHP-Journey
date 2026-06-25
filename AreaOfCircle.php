<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        define('pi', 3.14);
        function area($r){
            $area = pi * $r * $r;
            echo "Area of Circle = $area";
        }
        area(6);
    ?>
</body>
</html>