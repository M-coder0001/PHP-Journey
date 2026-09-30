<?php
    class car
    {
        public $brand = "BMW";
        private $price;

        function display($pr)
        {
            $this -> price = $pr;
        }
    }
    $c = new car();
    $c -> display(12000);
    $c -> $brand
?>