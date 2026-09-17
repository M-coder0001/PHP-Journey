<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        mysqli_select_db($c, "employee");
        $a = "INSERT INTO employee_details VALUES ('Vijay', '9632147856')";

        if(mysqli_query($c, $a))
        {
            echo "Record inserted successfully";
        }
        else
        {
            echo "Error inserting record: " . mysqli_error($c);
        }
    }
    
?>