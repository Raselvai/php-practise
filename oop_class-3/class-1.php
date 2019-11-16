<?php


    class Person{
        public $name;
        public $age;
        public $id;

        public function __construct($a,$b){
            $this->name = $a;
            $this->age = $b;
            echo "this name {$this->name} and age {$this->age} ";
        }
        public function setId($id){
            $this->id = $id;
        }
        public function __destruct(){
            if (! empty($this->id)) {
                echo "saving person";
            }
        }
    }
    $persone = new Person('akbor', "20");
    $persone->setId(12);

?>