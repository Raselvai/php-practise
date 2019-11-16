<?php

    class Userdata{
        public $name;
        public $age;

        public function __construct($a,$b){
            $this->name = $a;
            $this->age = $b;
        }
        public function display(){
            echo "my name is {$this->name} and my age is {$this->age}";
        }
    }

    class Admin extends Userdata{
        public $level;

        public function display(){
            echo "my name is {$this->name} and my age is {$this->age} and my level is {$this->level} ";
        }
    }


    $names = "Rasel ";
    $age = "18";
    $ur = new Userdata($names,$age);
    $ur->display();

    $user="admin";
    $id = "2";
    $ad = new Admin($user,$id);
    $ad->level ="administrator";
    $ad->display();

?>