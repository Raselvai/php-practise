<?php

    //variable scope
    $x =25;
    function num1(){
        global $x;
        $a = 5;
        echo $a;
        echo "<br>";
        echo "access to :" .$x;
    }
    function num2(){
        $b = 10;
        echo $b;
    }
    num1();
    num2();

?>