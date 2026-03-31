<?php

    class Vehicle{

        protected $name;
        protected $model;
        protected $years;

        public function __construct($Name,$Model,$Years)
        {
            $this->name = $Name;
            $this->model = $Model;
            $this->years = $Years;
        }
        public function getEngine(){
            return 'Engine Start';
        }
        public function OutputAll_Data(){
            echo "this name : ".$this->name."<br>";
            echo "this model : ".$this->model."<br>";
            echo "this years : ".$this->years."<br>";
        }

    }

    class Car extends Vehicle{
        protected $doors;
        protected $price;

        public function __construct($Name, $Model, $Years,$Doors,$Price)
        {
           parent::__construct($Name,$Model,$Years); 
        //    $this->name = $Name;
        //    $this->model = $Model;
        //    $this->years = $Years;
           $this->doors = $Doors;
           $this->price = $Price;
        }
        public function getAll_data(){
            parent::OutputAll_Data();
            echo 'this doors : '.$this->doors."<br>";
            echo 'this price : '.$this->price;
        }   
    }

    $mycar = new Car('Camry','Honda','2026','4','30000$');
    $mycar->getAll_data();
    // $mycar->OutputAll_Data();
    echo $mycar->getEngine();