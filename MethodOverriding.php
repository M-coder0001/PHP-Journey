<?php
    class car
    {
        function display()
        {
            echo "This is car class";
        }
    }
    class sportsCar extends car
    {
        function display()
        {
            echo "<br>This is sportsCar class";
        }
    }
    class LuxuryCar extends sportsCar
    {
        function display()
        {
            echo "<br>This is LuxuryCar class";
        }
    }

    $a = new car();
    $a->display();

    $b = new sportsCar();
    $b->display();

    $c = new LuxuryCar();
    $c->display();
?>