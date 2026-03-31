<?php
    class Example{
        public  $exmaple1;
        private $exmaple2;
        private $exmaple3;

        public function __construct($exmaple2,$exmaple3)
        {
            $this->exmaple2 = $exmaple2;
            $this->exmaple3 = $exmaple3;
        }
        public function getData(){
            return "{$this->exmaple1}" . "{$this->exmaple3}". "{$this->exmaple3}";
        }


    }
    $myobj = new Example('Example2','Example3');
    $myobj->exmaple1 = "Example1";
    echo "This is result : ".$myobj->getData();