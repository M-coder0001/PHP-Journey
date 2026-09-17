<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        mysqli_select_db($c, "employee");
        
        $a = "CREATE TABLE employee_details (
            ename VARCHAR(30),
            mobile VARCHAR(10)
        )";
        
        if(mysqli_query($c, $a))
        {
            echo "Table created successfully";
        }
        else
        {
            echo "Error creating table: " . mysqli_error($c);
        }
    }
    
?>