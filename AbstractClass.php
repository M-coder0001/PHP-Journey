<?php
    abstract class test
    {
        abstract public function display();
        public function show()
        {
            echo "This is a Abstract class." . "<br>";
        }
    }
    class car extends test
    {
        public $price;

        function __construct($pr)
        {
            $this->price = $pr;
        }

        function display()
        {
            echo "Car price: " . $this->price . "<br>";
        }

        function show()
        {
            test::show();
            echo "This is a child class.";
        }
    }

    $car1 = new car(50000);
    $car1->display();
    $car1->show();
?>