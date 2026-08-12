<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        semester: <select name="sem">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br>
        Subject: <select name="sub[]" size="4" multiple="multiple">
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value=".NET">.NET</option>
            <option value="NIS">NIS</option>
            <option value="Java">Java</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Display">
    </form>
    <?php

        if (isset($_GET["submit"])) 
        {
            if (isset($_GET["sub"]) && isset($_GET["sem"]))
            {
                echo "Semester is: " . $_GET["sem"] . "<br>";

                $a = $_GET["sub"];

                $x = "Subjects are: ";

                foreach ($a as $value) 
                {
                    $x .= $value . ", ";    
                }

                echo $x . "<br>";
            }
            else
            {
                echo "<script>
                        alert('Please Select Data First');</script>";
            }
        }

    ?>
</body>
</html>