<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        function getvalue(){
            static $x = 0;
            $x = $x + 5;
            echo "x = $x <br>";
        }
        getvalue();
        getvalue();
        getvalue();
    ?>
</body>
</html>