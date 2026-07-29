<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type ="submit" name ="sb" value="Red">
        <input type ="submit" name ="sb" value="Green">
        <input type ="submit" name ="sb" value="Blue"> 
    </form>

    <?php

        if (isset($_GET["sb"])) 
            {
                $a = $_GET["sb"];
                echo "<body bgcolor='$a'></body>";
            }
    ?>    
</body>
</html>
