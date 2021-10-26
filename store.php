<?php

// create class and objects
    class people{
        public $name;
        public $dob;
        public $hobby;

        //store
        function __construct($name,$dob,$hobby){
            $this -> name  = $name;
            $this -> dob = $dob;
            $this -> hobby = $hobby;
        }

        
        function dob(){
            //calc age
            $age = 2021 - $this -> dob;
            echo "Hi {$this -> name}, you are {$age} years old! and {$this ->hobby}";
        }

        function get_name(){
            return $this -> name;
        }

        function get_hobby(){
            return $this -> hobby;
        }

        function get_dob(){
            return $this -> dob;
        }

    }



?>