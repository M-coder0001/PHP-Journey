<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="2" style="margin: auto;">
        <form method="get">

            <tr>
                <td>Semester</td>

                <td>
                    <input type="radio" name="sem" value="Semester-1">
                    Sem-1
                </td>

                <td>
                    <input type="radio" name="sem" value="Semester-2">
                    Sem-2
                </td>

                <td>
                    <input type="radio" name="sem" value="Semester-3">
                    Sem-3
                </td>

                <td>
                    <input type="radio" name="sem" value="Semester-4">
                    Sem-4
                </td>
            </tr>

            <tr>
                <td>Subjects</td>

                <td>
                    <input type="checkbox" name="sub[]" value="PHP">
                    PHP
                </td>

                <td>
                    <input type="checkbox" name="sub[]" value="Python">
                    Python
                </td>

                <td>
                    <input type="checkbox" name="sub[]" value=".NET">
                    .NET
                </td>

                <td>
                    <input type="checkbox" name="sub[]" value="NIS">
                    NIS
                </td>
            </tr>

            <tr>
                <td colspan="5" align="center">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>

        </form>
    </table>


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