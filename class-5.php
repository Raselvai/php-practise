<?php

    //while loop
    //do while loop

    $a = 1;
    while($a <= 10){
        echo "print: $a <br/>";
        $a++;
    }

    $b = 2;
    do{
        echo "print: $b<br>";
        $b++;
    }while($b <= 10);

    //for loop

    for($i = 0; $i <= 10; $i++){
        echo "print is $i<br>";
    }


    //for each

    $subject = array("bangla","english","math");

    foreach($subject as $value){
        echo "$value<br>";
    }
?>