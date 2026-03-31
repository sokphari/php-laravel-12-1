
<?php
    include 'Employee.php';
    include 'Tax.php';
    class Work extends Employee implements Tax{
        private $work_position;
        public function __construct($Username, $Gender, $Basesalary,$Work_position)
        {
            parent::__construct($Username, $Gender, $Basesalary);
            $this->work_position = $Work_position;
        }
        public function getAllData(){
            echo '--- Information Employee --- <br>';
            parent::getDetail();
            echo 'Work Position : '.$this->work_position;
        }
        public function income($salary)
        {
            if($salary < 500){
                $tax = 0;
            }elseif($salary >= 1000){
                $tax = $salary * 0.10;
            }else{
                $tax = $salary * 0.20;
            }
            $netIncome = $salary - $tax;
            echo 'base salary : '.$salary;
            echo 'Tax : '.$tax;
            echo 'netIncome : '.$netIncome;
        }
    }

?>