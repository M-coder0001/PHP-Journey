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
            echo "Car price: $" . $this->price . "<br>";
        }
    }
    
    $car1 = new sportsCar("BMW", 1500000);
    $car1->display();
?>