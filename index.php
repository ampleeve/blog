<?php
    //echo "Hello world!";
    //echo time();

    function add($param1, $param2){
        
        return $param1 + $param2;
    }

    $a = $_GET ['a'];
    $b = $_GET ['b'];

    for ($i=0; $i<11; $i++){
        echo $i."<br>";
    }

    echo "<br>".add($a, $b);
?>