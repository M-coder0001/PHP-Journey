<?php
    interface test
    {
        public const company = "BMW";
        public function display();
    }
    class car implements test
    {
        public $price;

        function __construct($pr)
        {
            $this->price = $pr;
        }

        function display()
        {
            echo "Car price: " . $this->price . "<br>";
            echo "Car company: " . self::company . "<br>";
        }
    }
    $car1 = new car(50000);
    $car1->display();
?>