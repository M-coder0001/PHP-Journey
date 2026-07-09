<?php
    function addition($x, $y){
        $a = $x + $y;
        return $a;
    }
    echo addition(10, 20);
    echo "<br>";
    
    //other way to print the result of the function
    $result = addition(10, 20);
    echo "Addition of 10 and 20 is: " . $result;
?>