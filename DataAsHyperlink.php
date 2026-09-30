<?php
    $c = mysqli_connect("localhost","root","");

    if($c)
        {
            mysqli_select_db($c,"employee");
            $display = mysqli_query($c, "select ename from employee_details");

            echo "<table border='2'> <tr> Employee Name </tr>";

            while($row = mysqli_fetch_array($display))
                {
                    echo "<tr><td> <a href = 'DataAsHyperlink.php?id={$row['ename']}'>".$row['ename']."</a></td></tr>";
                }
            
            if(isset($_GET["id"]))
                {
                    $a = $_GET["id"];
                    $q = mysqli_query($c, "select *from employee_details where ename='$a'");
                    echo "<table border = '2'><th>Employee Name</th><th>Mobile No.</th>";

                    while($row = mysqli_fetch_array($q))
                        {
                            echo "<tr><td>" .$row['ename'] . "</td>" ;
                            echo "<tr><td>" .$row['mobile'] . "</td></tr>" ;
                        }
                }
        }
?>