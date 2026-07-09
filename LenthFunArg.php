<?php
    function display($a){
        echo "No. of the argument is: " . func_num_args() . "<br>";
        $b = func_get_args();
        foreach($b as $value){
            echo $value . "<br>";
        }
    }
    display(10, 3.5, "Mayank");
    display(6.5, true);
?>