<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Name: <input type="text" name="name"><br>
        Marks1: <input type="text" name="m1"><br>
        Marks2: <input type="text" name="m2"><br>
        Marks3: <input type="text" name="m3"><br>
        Marks4: <input type="text" name="m4"><br>
        Marks5: <input type="text" name="m5"><br><br>
        
        <input type="submit" value="Show Result" name="sb"><br>
    </form>

    <?php
        if(isset($_GET["sb"]))
        {
            $name = $_GET["name"];
            $m1 = $_GET["m1"];
            $m2 = $_GET["m2"];
            $m3 = $_GET["m3"];
            $m4 = $_GET["m4"];
            $m5 = $_GET["m5"];

            $total = $m1 + $m2 + $m3 + $m4 + $m5;
            $per = ($total / 500) * 100;

            echo "Name: ".$name."<br>";
            echo "Total Marks: ".$total."<br>";
            echo "Percentage: ".$per."%<br>";

            if($m1 < 35 || $m2 < 35 || $m3 < 35 || $m4 < 35 || $m5 < 35)
            {
                $result = "Fail";
            }
            else
            {
                $result = "Pass";
            }

            if($per >= 70)
            {
                $class = "Distinction";
            }
            else if($per < 70 && $per >= 60)
            {
                $class = "First";
            }
            else if($per < 60 && $per >= 50)
            {
                $class = "Second";
            }
            else if($per < 50 && $per >= 35)
            {
                $class = "Third";
            }

            $n = $_GET["name"];
            echo "<table border='1' cellspacing='0' cellpadding='10'>";
            echo "<tr><th colspan='2'>Student Result</th></tr>";
            echo "<tr><td>Name</td><td>".$n."</td></tr>";
            echo "<tr><td>Marks1</td><td>".$m1.", ".$m2.", ".$m3.", ".$m4.", ".$m5."</td></tr>";
            echo "<tr><td>Total Marks</td><td>".$total."</td></tr>";
            echo "<tr><td>Percentage</td><td>".$per."%</td></tr>";
            echo "<tr><td>Result</td><td>".$result."</td></tr>";
        }

        if($result == "Pass") 
        {
            echo "<tr><td>Class</td><td>$class</td></tr>";
        }
        else
        {
            echo "<tr><td>Class</td><td>---</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>