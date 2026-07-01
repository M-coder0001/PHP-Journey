<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $x = 4;
        $factorial = 1;
        for($i = 1; $i <= $x; $i++){
            $factorial *= $i;
        }
        echo "<p style='font-size: 35px; color: red;'>The factorial of $x is $factorial</p>";
    ?>
</body>
</html>


other logic
    for($i = $x; $i >= 1; $i--){
        $factorial = $factorial * $i;
    }