<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $color = 'white0';
        switch ($color) {
            case 'yellow':
                echo "<body bgcolor='yellow'></body>";
                break;
            case 'navy':
                echo "<body bgcolor='navy'></body>";
                break;
            case 'red':
                echo "<body bgcolor='red'></body>";
                break;
            default:
                echo "<body bgcolor='black'></body>";
                break;
        }
    ?>
</body>
</html>