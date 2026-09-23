<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into forms</title>
</head>
<body>
    <form method="post">
        Employee Name : <input type="text" name="en"><br>
        Mobile No : <input type="text" name="mb"><br>

        <input type="submit" name="inst" value="Insert Record">
    </form>
    
    <?php
        $c=mysqli_connect("localhost","root","");
        if($c)
        {
            mysqli_select_db($c, "employee");
            if(isset($_POST["inst"]))
            {
                    $e=$_POST["en"];
                    $m=$_POST["mb"];
                    $ins= "insert into employee_details values('$e',$m) ";

                    if(mysqli_query($c, $ins))
                        echo "Record is inserted successfully";
                    else
                        echo "Record is not inserted";
            }
        }
        mysqli_close($c);
    ?>
</body>
</html>