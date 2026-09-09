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
        if(session_destroy())
        {
            header("Location: login.php");
        }
    }
?>