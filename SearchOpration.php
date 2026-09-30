<html>
    <body>
        <form method="post">
            Employee Name : <input type="text" name="en"> 
            <input type="submit" name="dis" value="Search">
            <br><br> 
            </form> 
            <?php
            if (isset($_POST["dis"])) 
            {
                $conn = mysqli_connect("localhost", "root", "", "employee");

                if ($conn) 
                {
                    $nm = $_POST["en"];
                    $disp = mysqli_query($conn, "SELECT * FROM employee_details WHERE ename = '$nm'");

                    if ($disp && mysqli_num_rows($disp) > 0) 
                    {
                        echo "<h2><b>Record found </b></h2>";
                        echo "<table border='1'><tr><th>Name</th><th>Mobile No</th></tr>";

                        while ($row = mysqli_fetch_assoc($disp)) 
                        {
                            echo "<tr><td>" . $row["ename"] . "</td><td>" . $row["mobile"] . "</td></tr>";
                        }

                        echo "</table>";
                    } 
                    else 
                    {
                        echo "<h2><b>No matching record found </b></h2>";
                    }

                    mysqli_close($conn);
                } 
                else 
                {
                    echo "<h2><b>Database connection failed.</b></h2>";
                }
            }
            ?> 
    </body>
</html> 