<?php
    class car
    {
        public $name;
        public $price;

        function __construct($nm, $pr)
        {
            $this->name = $nm;
            $this->price = $pr;
        }
    }
    class sportsCar extends car
    {
        
        function display()
        {
            echo "Car name: " . $this->name . "<br>";
        }
    }
    class luxuryCar extends sportsCar
    {
        function displays()
        {
            echo "Car price: $" . $this->price . "<br>";
        }
    }
    $car1 = new luxuryCar("BMW", 1500000);
    $car1->display();
    $car1->displays();
    
?>