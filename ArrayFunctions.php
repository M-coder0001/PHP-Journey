<?php
    $a = array(1,2,3,4);
    echo "No of elements in array: " . count($a) ."<br>";

    $b = array("Riya", 17, "Diploma");
    list($name, $age, $course) = $b;
    echo "Name is: " . $name ."<br>";
    echo "Age is: " . $age ."<br>";
    echo "Course is: " . $course ."<br>";

    if(in_array("Riya", $b)){
        echo "Element found<br>";
    } else {
        echo "Element not found<br>";
    }

    echo "Current Element: ". current($b) ."<br>";
    echo "Next Element: " . next($b) ."<br>";

    next($b);

    echo "Previous Element: ". prev($b). "<br>";
    echo "Last Element: " . end($b). "<br>";

    $c = array(20,10,30,40);
    sort($c);
    print_r($c);
    echo "<br>";
    print_r(array_reverse($c));
    echo "<br>";
    
    print_r(array_merge($a, $b));
?>