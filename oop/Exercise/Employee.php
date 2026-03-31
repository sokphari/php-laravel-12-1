<?php

    class Employee{
        protected $username;
        protected $gender;
        protected $basesalary;

        public function __construct($Username,$Gender,$Basesalary)
        {
            $this->username = $Username;
            $this->gender = $Gender;
            $this->basesalary = $Basesalary;
        }
        public function getDetail(){
            echo 'Name : '.$this->username.'<br>';
            echo 'Gender : '.$this->gender.'<br>';
            echo 'Basesalary : '.$this->basesalary.'<br>';
        }
    }