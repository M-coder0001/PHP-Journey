<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Redirection</title>
</head>
<body>
    <form>
        Select Website: <select name="loc">
            <option value="https://www.google.com">Google</option>
            <option value="https://www.facebook.com">Facebook</option>
            <option value="https://www.twitter.com">Twitter</option>
            <option value="http://localhost/PHP%20Programs/Validation.php">Validation</option>
        </select>

        <input type="submit" name="sb" value="Open Website">
    </form>

    <?php
        if(isset($_GET['loc'])) {
            $selectedWebsite = $_GET['loc'];
            header("Location: $selectedWebsite");
            exit();
        }
    ?>
    
</body>
</html>