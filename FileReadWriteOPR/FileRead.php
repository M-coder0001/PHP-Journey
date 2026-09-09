<!-- Reading From FIle -->
<?php
    $a = fopen("data.txt", "r");
    echo fread($a, filesize("data.txt"));
    fclose($a);
?>