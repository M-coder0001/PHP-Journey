<?php
    $a = array(1,2,3,4);
    for($i=0;$i<4;$i++){
        echo $a[$i]."<br>";
    }

    $b = array(10,20,30,"PHP");
    foreach($b as $i){
        echo $i."<br>";
    }

    $c[0] = "hi";
    $c[1] = "hello";
    $c[12] = "bye";

    foreach($c as $key=>$i){
        echo "[$key]=>$i"."<br>";
    }
?>
<?php
    $a = array(10,20,"HELLO");
    foreach($a as $i){
        echo $i."<br>";
    }
    $b = array('first'=>10,'second'=> 20,'third'=> 30,'fourth'=> 'PHP');
    foreach($b as $key=>$i){
        echo "[$key]=>$i" ."<br>";
    }
    $c['Name'] = "raj";
    $c['rollno'] = 20;
    $c['per'] = 98.78;

    foreach($c as $key=>$i){
        echo "[$key]=>$i"."<br>";
    }
?>
<?php
    function display($a){
        echo "Number of arguments: ".func_num_args()."<br>";
        $a = func_get_args();
        foreach($a as $v){
            echo $v."<br>";
        }
    }
    display("hii",20);
    display("hii",10,30);
?>
<?php
    function add($a,$b=10){
        return $a + $b;
    }
    echo "addition is: ". add(10,30)."<br>";
    echo "additon: " . add(10)."<br>";
?>




