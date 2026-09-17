<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        mysqli_select_db($c, "employee");
        $a = "UPDATE employee_details SET mobile='2222222222' WHERE ename='Vijay'";

        if(mysqli_query($c, $a))
        {
            echo "Record updated successfully";
        }
        else
        {
            echo "Error updating record: " . mysqli_error($c);
        }
    }
    
?>