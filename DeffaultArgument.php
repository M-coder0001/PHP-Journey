<?php
    function addition($x, $y= 40){
        $a = $x + $y;
        return $a;
    }
    echo addition(10);
    echo "<br>";
    
    //Reassigning the value of the second argument
    $result = addition(10, 20);
    echo "Addition of 10 and 20 is: " . $result;
?>