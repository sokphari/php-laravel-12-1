<?php

include '../database/connectDB.php';
try {

    if (isset($_POST['saveBtn'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $position = $_POST['position'];
        $hire_date = $_POST['hire_date'];

        $insertDb = "INSERT INTO `employee_tb`
        (`name`,`gender`,`email`,`dob`,`position`,`hire_date`)
        values 
        ('$name','$gender','$email','$dob','$position','$hire_date')
        ";

        $result = $config->query($insertDb);
        if($result){
            echo 'insert data success';
        }else{
            echo 'not found';
        }
    }
} catch (Exception $e) {
    echo '' . $e->getMessage();
}
