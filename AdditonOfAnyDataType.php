<?php
    function sum($a) {
        $b = func_get_args();
        $sum = 0;

        foreach($b as $value) {
            $sum += $value;
            
        }
        return $sum;
    }
    $d = sum(10, 2.5, 3.5);
    echo "The sum of the arguments is: " . $d . "<br>";

    $d = sum(10, 2.5, 3.5, 4.5);
    echo "The sum of the arguments is: " . $d . "<br>";
?>