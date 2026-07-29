<?php
    
    if ($_POST["sb"] == "Display Username") 
        echo "Username is: " . $_POST["uname"];
    else
        echo "Password is: " . $_POST["pass"];
        
?>