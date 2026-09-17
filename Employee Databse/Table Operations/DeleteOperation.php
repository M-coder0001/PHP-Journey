<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        mysqli_select_db($c, "employee");
        $a = "DELETE FROM employee_details WHERE ename='Vijay'";

        if(mysqli_query($c, $a))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($c);
        }
    }
    
?>