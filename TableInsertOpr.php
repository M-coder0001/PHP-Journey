<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Employee Name : <input type="text" name="en"><br>
        Mobile No : <input type="text" name="mb"><br>
        <input type="submit" name="inst" value="Insert Record">
    </form>

    <?php
        $c = mysqli_connect("localhost", "root", "");

        if($c)
        {
            mysqli_select_db($c, "employee");

            if(isset($_POST["inst"]))
            {
                $nm = $_POST["en"];
                $mb = $_POST["mb"];

                $ins = "INSERT INTO employee_details (ename, mobile) VALUES ('$nm', '$mb')";

                if(mysqli_query($c, $ins))
                {
                    echo "<h2><b>Record inserted successfully</b></h2>";
                }
                else
                {
                    echo "<h2><b>Error inserting record: " . mysqli_error($c) . "</b></h2>";
                }
            }
        }
        else
        {
            echo "<h2><b>Database connection failed: " . mysqli_connect_error() . "</b></h2>";   
        }
    ?>
</body>
</html>