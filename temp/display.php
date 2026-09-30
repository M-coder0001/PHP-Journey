<?php
    $sem = $_POST['sem'];
    echo "Semester is: " . $sem;

    $a = $_POST['sub'];
    $x = "Subjects are: ";

    foreach($a as $val)
        {
            $x .= $val . ",";
        }
    
    echo "<br>" . $x;
?>