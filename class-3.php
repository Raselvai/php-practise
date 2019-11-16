<?php

    //arithmetic oparator

    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo $z;

    //assignment oparator

    $a = 20;
    $a -= 30;
    echo $a;

    $c = 200;
    $c -=10;
    echo $c;

    //comparijon oparator

    $x = 200;
    $y = "200";
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);

    //logical oparator

    $x = 40;
    $y = 60;
    if($x == 40 and $y == 60){
        echo "tarining with life project";
    }else{
        echo "error";
    }
    
    $x = 40;
    $y = 60;
    if($x == 40 or $y == 40 ){
        echo "training";
    }else{
        echo "error";
    }

    $x = 40;
    $y = 60;
    if($x == 45 xor $y == 60 ){
        echo "training";
    }else{
        echo "error";
    }
    

?>