<?php
    $a = array(1, 2, 3);
    $b = array("a" => 4, "b" => 5);
    $c = $a + $b; #Union of two arrays, it will return the first array if the key is the same in both arrays.

    foreach($c as $key => $value){
        echo $key . " => " . $value . "<br>";
    }
?>