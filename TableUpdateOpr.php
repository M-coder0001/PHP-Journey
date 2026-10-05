<?php
    $c=mysqli_connect("localhost","root","");

    if($c)
    {
        mysqli_select_db($c,"employee");

        if(isset($_GET["sb"]))
        {
            $a = $_GET["id"];
            $d = mysqli_query($c,"select *from employee_details where ename='$a'");
            $row = mysqli_fetch_array($d);
            echo "<form>
                    Employee Name: <input type='text' name='n1' value='{$row['ename']}'><br>
                    Mobile No: <input type='text' name='n2' value='{$row['mobile']}'><br>
                    <input type='submit' name='sb' value='Update Record'>
                  </form>";
        }
        if($_GET["sb1"])
        {
            $x = $_GET["n1"];
            $y = $_GET["n2"];
            $q = "update employee_details set mobile='$y' where ename='$x'";

            if(mysqli_query($c,$q))
            {
                echo "<h2><b>Record updated successfully</b></h2>";
            }
            else
            {
                echo "<h2><b>Error updating record: " . mysqli_error($c) . "</b></h2>";
            }
        }
        $d = mysqli_query($c,"select *from employee_details");
        echo "<table border='1'><tr><th>Employee Name</th><th>Mobile No</th><th>Update</th></tr>";
        while($row = mysqli_fetch_array($d))
        {
            echo "<tr>";
            echo "<td>{$row['ename']}</td>";
            echo "<td>{$row['mobile']}</td>";
            echo "<td><form>
                    <input type='hidden' name='id' value='{$row['ename']}'>
                    <input type='submit' name='sb' value='Update'>
                  </form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
        echo mysqli_error($c);
?>