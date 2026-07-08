<?php
    $a = array("First" => array("Name" => "Mayank","Age" => 20,"City" => "Rajkot"),
                "Second" => array("Name" => "Ravi","Age" => 25,"City" => "Ahmedabad"),
                "Third" => array("Name" => "Raj","Age" => 30,"City" => "Surat")
            );
    foreach($a as $key => $value){
        echo "$key : ";
        foreach($value as $key1 => $x){
            echo "[$key1] = $x ";
        }
        echo "<br>";
    }
?>
