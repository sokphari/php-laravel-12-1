<?php

include '../database/connectDB.php';
try {

    if (isset($_POST['saveBtn'])) {
        $name = htmlspecialchars($_POST['name']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $dob = $_POST['dob'];
        $position = htmlspecialchars($_POST['position']);
        $hire_date = $_POST['hire_date'];

        $insertDb = "INSERT INTO `employee_tb`
        (`name`,`gender`,`email`,`dob`,`position`,`hire_date`)
        values 
        ('$name','$gender','$email','$dob','$position','$hire_date')
        ";

        $result = $config->query($insertDb);
        if($result){
            header('location: ../index.php?msg=success');
        }else{
            echo 'not found';
        }
    }
} catch (Exception $e) {
    echo '' . $e->getMessage();
}
