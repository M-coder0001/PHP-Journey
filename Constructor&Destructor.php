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
        function display()
        {
            echo "Car name: " . $this->name . "<br>";
            echo "Car price: $" . $this->price . "<br>";
        }
        function __destruct()
        {
            echo "The car object has been destroyed.";
        }
    }
    $car1 = new car("BMW", 1500000);
    $car1->display();
?>