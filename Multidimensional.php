
<?php

    # Multidimensional Array
    $a = array(
        array("Mayank", 20, "Rajkot"),
        array("Ravi", 25, "Ahmedabad"),
        array("Raj", 30, "Surat")
    );
    foreach($a as $value){
        foreach($value as $x){
            echo "$x ";
        }
        echo "<br>";
    }

    #using print_r() function
    #echo "<pre>";
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $a[$i][$j]." ";
        }
        echo "<br>";
    }

    #using print_r() function
    print_r($a);
    

?>