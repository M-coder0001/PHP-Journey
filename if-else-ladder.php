<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $x = 30;
        if($x == 30){
            echo "<p style='font-size: 35px; color: red;'>The value of x is 30</p>";
        }
        else if($x == 20){
            echo "<p style='font-size: 30px; color: blue;'>The value of x is 20</p>";
        }
        else if($x ==40){
            echo "<p style='font-size: 40px; color: green;'>The value of x is 40</p>";
        }
        else{
            echo "<p style='font-size: 50px; color: orange;'>The value of x is not 30, 20 or 40</p>";
        }
    ?>
</body>
</html>