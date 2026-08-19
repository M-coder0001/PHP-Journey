<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        table, th, td {
            background-color: #f2f2f2;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <table border="1" align="center">
            <tr>    
                <th colspan="2">Login </th>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="sb" value="Login">
                    <input type="reset" name="rs" value="Reset">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Not Registered? 
                    <a href="register.php">Sign Up Here</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['sb'])) {
            if($_POST['email'] == "mayankchandrapal@gmail.com" && $_POST['pass'] == "M@y@nk_0001") {
                echo "<script>alert('Login successful!');</script>";
            } else {
                echo "<script>alert('Invalid email or password. Please try again.');</script>";
            }
        }
    ?>
</body>
</html>