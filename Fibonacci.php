<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $num = 1;
        $n1 = 0;
        $n2 = 1;
        echo "Fibonacci Series: ";
        echo $n1." ".$n2." ";
        while($num <= 8){
            $n3 = $n1 + $n2;
            echo $n3." ";
            $n1 = $n2;
            $n2 = $n3;
            $num++;
        }
    ?>

</body>
</html>