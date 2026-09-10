<?php
    session_start();

    if (isset($_SESSION['hit_count'])) 
        $_SESSION['hit_count'] += 1;
    
    else 
        $_SESSION['hit_count'] = 1;
    
    echo "You have visited this page " . $_SESSION['hit_count'] . " times.";

?>