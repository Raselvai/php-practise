<?php

    class User{
        public $name;
        public $age;

        public function __construct($username,$ages){
            $this->name = $username;
            $this->age = $ages;
            echo "this name {$this->name} and age {$this->age}";
        }
        public function __destruct(){
            unset($this->name);
            unset($this->age);
        }
    }
    $name = "mamun";
    $age = "20";
    $ur = new User($name,$age);


?>