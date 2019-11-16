<?php

    //class contants

    class Userdat{
        const NAME = "abdullah al mamun";
        public function display(){
            echo "full name is :" .Userdat::NAME;
        }

    }
    $ur = new Userdat;
    $ur->display();



?>