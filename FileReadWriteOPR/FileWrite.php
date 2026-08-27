<!-- Writing into File -->
<?php
    $a = fopen("data.txt", "w");
    fwrite($a, "Hello Mayank");

    fclose($a);
    echo "Writing in file successfully";
?>

