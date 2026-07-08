<?php
    $a = array("a" => 1, "b" => 2, "c" => 3);
    $b = array("c" => 3, "a" => 1, "b" => 2);

    #(==) checks the equality of values in the array, but not the order of the elements.
    if($a == $b){
        echo "Equal";
    }else{
        echo "Not Equal";
    }
    echo "<br>";
    #(===) checks the equality of values in the array, and also checks the order of the elements.
    if($a === $b){
        echo "Equal";
    }else{
        echo "Not Equal";
    }
?>