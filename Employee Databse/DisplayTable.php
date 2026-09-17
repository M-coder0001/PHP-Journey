<?php
    $c = mysqli_connect("localhost", "root", "");

    if($c)
    {
        mysqli_select_db($c, "employee");
        
        $display = mysqli_query($c, "SELECT * FROM employee_details");
        echo "<table border='1'>";
        echo "<tr>
            <th>Employee Name</th>
            <th>Mobile Number</th>
            </tr>";
        
        while($row = mysqli_fetch_array($display))
        {
            echo "<tr>";
            echo "<td>" . $row['ename'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";    
    }
?>