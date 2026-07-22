<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        NO-1 <input type ="number" name = "n1" min="1" max="50" step="1"><br>
        NO-2 <input type ="number" name = "n1" min="1" max="50" step="1"><br>
        <input type ="submit" name="sb" value = "Add">
    </form>

    <?php
        if (isset($_GET["sb"])) 
            {
                $a = $_GET["n1"];
                $b = $_GET["n1"];

                $c = $a + $b;

                echo "Addition is: " . $c ."<br>";
            }
    ?>
</body>
    
</html>