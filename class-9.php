<?php

    //all super global
    //global
    //server

    $x = 10;
    $y = 20;

    function sum(){
        $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];

    }
    sum();
    echo "globals is: " .$z;
    echo "<br>";

        //server

        echo $_SERVER['PHP_SELF'];
        echo"<br>";
        echo $_SERVER['SERVER_NAME'];       
?>