<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validations</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $n1 = $m1 = $a1 = $b1  = " ";
        if (isset($_POST["sb"])) 
        {
            if (is_numeric($_POST["uname"])) 
            {
                $n1 = "Username can't be numeric";
            }
            else
            {
                $a1 = "Username is: " . $_POST["uname"];
            }
        
            if (strlen($_POST["pass"]) < 10)
                $m1 = "Password must be at least 10 characters long";
            else
                $b1 = "Password is: " . $_POST["pass"];
        }
    ?>
    <form method = "post">
        Username: <input type="text" name="uname"> <span class="error">*<?php if(isset($n1)) echo $n1; ?> </span> <br><br>
        Password: <input type="password" name="pass"> <span class="error">*<?php if(isset($m1)) echo $m1; ?> </span> <br><br>
        <input type="submit" name="sb" value="LOGIN"> <br><br>
        <input type="reset" name="rs" value="RESET"> <br><br>
    </form>

    <?php
        echo "$a1 <br> $b1";
    ?>

</body>
</html>