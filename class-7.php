<?php
    //index array
    $x = array(4,10,20,30,50);
    $lenth = count($x);
    for($i = 0; $i < $lenth; $i++){
        echo $x[$i];
        echo "<br>";
    }

    //for each

    $ages = array("karim" => "25","rahim" => "60","malek" => "40");
    foreach($ages as $x=> $age ){
        echo $x ."ar boyps =". $age;
    }


?>