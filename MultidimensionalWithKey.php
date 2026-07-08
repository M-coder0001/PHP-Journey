<?php
    $a = array("First" => array("Mayank", 20, "Rajkot"),
                "Second" => array("Ravi", 25, "Ahmedabad"),
                "Third" => array("Raj", 30, "Surat")
            );
    foreach($a as $key => $value){
        echo "$key : ";
        foreach($value as $key1 => $x){
            echo "[$key1] = $x ";
        }
        echo "<br>";
    }
?>
