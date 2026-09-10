<?php
    header("Cache-Control: no-store, no-cache, must-revalidate");
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="POST"> 
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="sb" value="Login">
        </form>
        <?php
        
            if (isset($_POST['sb'])) 
            {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                header("Location: home.php");   
                exit();
            }
        ?>
    </body>
</html>