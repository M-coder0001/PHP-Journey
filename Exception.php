<?php
    $age = 15;
    try
    {
        if ($age < 18)
        {
            throw new Exception("You must be at least 18 years old.");
        }
        else
        {
            echo "You are old enough to proceed.";
        }
    }
    catch (Exception $e)
    {
        echo "Error: " . $e->getMessage();
    }
?>