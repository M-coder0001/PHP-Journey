<?php
    session_start();
    echo "Name: " . $_SESSION["name"] . "<br>";
    echo "Age: " . $_SESSION["age"] . "<br>";
?>