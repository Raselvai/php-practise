<?php

    class student{
        public function development(){
            return "physics";
        }
        public function detils(){
          echo  $this->development();
        }
    }
    $st = new student;
    $st->detils();


?>