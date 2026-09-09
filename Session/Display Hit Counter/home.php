<?php
    header("Cache-Control: no-cache, no-store, must-revalidate");

    session_start();
    if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
        exit();
    }
    else
    {
        echo "Welcome, " . $_SESSION['username'] . "!<br>";
        echo "<a href='home1.php'>HOME1</a>";
    }
?>