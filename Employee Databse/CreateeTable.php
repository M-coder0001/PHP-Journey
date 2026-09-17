<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        $a = "CREATE DATABASE employee";

        if(mysqli_query($c, $a))
        {
            echo "Database created successfully";
        }
        else
        {
            echo "Error creating database: " . mysqli_error($c);
        }
    }
?>