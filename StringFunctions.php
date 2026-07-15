<?php
    echo chr(65)."<br>";
    echo ord("A")."<br>";
    echo strlen("Mayank")."<br>";
    $a = "Mayank";
    echo "Length is: $a<br>";
    trim($a);
    echo "Length is: $a<br>";
    $b = array("hello", "how", "are", "you");
    echo join(" ", $b)."<br>";
    echo substr("Friend",3)."<br>";
    echo str_replace("your","my","This is your choice")."<br>";

    print_r(str_split("Hello")); echo "<br>";
    echo str_word_count("This is my class")."<br>";
    echo strcmp("Hello","hello")."<br>";
    echo strcmp("Hello","Hello")."<br>";
    echo strpos("Friend","i")."<br>";
    echo strrev("Atmiya")."<br>";
    echo strtolower("WELCOME")."<br>";
    echo strtoupper("welcome")."<br>";
    echo str_shuffle("Atmiya university")."<br>";
    echo ucfirst("Welcome to atmiya")."<br>";
    echo ucwords("Welcome to atmiya")."<br>";
?>