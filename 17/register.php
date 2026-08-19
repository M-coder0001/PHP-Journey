<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

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
                <th colspan="2">Registration Form</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="uname"  required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mobile" maxlength="10" required></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="sb" value="Sign Up">
                    <input type="reset" name="rs" value="Reset">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Already Registered? 
                    <a href="login.php">Login Here</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['sb'])) {
            echo "<script>alert('Registration successful!');</script>";
            
            echo "<p>Name: " . $_POST['uname'] . "</p>";
            echo "<p>Email: " . $_POST['email'] . "</p>";
            echo "<p>Mobile Number: " . $_POST['mobile'] . "</p>";
            echo "<p>City: " . $_POST['city'] . "</p>";

            echo "Welcome, " . $_POST['uname'] . "! You have successfully registered.";
        }
    ?>
</body>
</html>