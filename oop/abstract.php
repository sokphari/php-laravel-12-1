<?php

    abstract class Demo1{
    
        protected $test;

        public function __construct($test1)
        {
            $this->test = $test1;
        }
        public function output(){
            echo $this->test;
        }
        // abstract public function getData();
        // abstract public function getall();
    
    }
    class Demo2 extends Demo1{
        protected $test2;
        public function __construct($test1,$test2)
        {
            parent::__construct($test1);
            $this->test2 = $test2;
        }

        public function outputdata()
        {
            //parent::getData();
        }
        public function getData()
        {
            echo $this->test;
            echo $this->test2;
        }

    }
    $obj = new Demo2('sokkha','sokkha2');
    $obj->getData();