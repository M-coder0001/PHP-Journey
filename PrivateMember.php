<?php
    class car
    {
        public $name;
        private $price;

        function __construct($nm, $pr)
        {
            $this->name = $nm;
            $this->price = $pr;
        }
        // function display()
        // {
        //     echo "Car name: " . $this->name . "<br>";
        //     echo "Car price: $" . $this->price . "<br>";
        // }
        
    }
    $car1 = new car("BMW", 1500000);
    // $car1->display();
    echo "$car1->name";
    echo "$car1->price"; 
?>