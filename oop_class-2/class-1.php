<?php


    class Person{
        public $name;
        public $age;


        public function __construct($a,$b){
            $this->name = $a;
            $this->age = $b;
        }
        public function detils(){
            echo "this name is :{$this->name} person age is {$this->age}";
        }
    }
    $persone = new Person('akbor', "20");
    $persone->detils();

?>