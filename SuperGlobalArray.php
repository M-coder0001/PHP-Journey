<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;

    function getvalue() {
        $GLOBALS['a'] = $GLOBALS['a'] + 5;
        $GLOBALS['b'] = $GLOBALS['b'] + 5;
    }
    getvalue();
    echo "a = $a <br> b =  $b";
    ?>
</body>
</html>