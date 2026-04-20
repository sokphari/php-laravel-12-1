<?php
    include '../database/connectDB.php';

    if(isset($_POST['BtnUpdate'])){
       $name = trim($_POST['name'] ?? '');
       $gender = trim($_POST['gender'] ?? '');
       $email = trim($_POST['email'] ?? '');
       $dob = trim($_POST['dob'] ?? '');
       $position = trim($_POST['position'] ?? '');
       $hire_date = trim($_POST['hire_date'] ?? '');
       $is_active = $_POST['is_active'];
       $updateDB = "UPDATE `employee_tb` SET `name`='$name',
        `gender`='$gender',`email`='$email',`dob`='$dob',`position`='$position',
        `hire_date`='$hire_date' WHERE `emp_id`='$id'";
       $result = $config->query($updateDB);
       if($result){
        header('location: ../index.php');
        exit();
       }else{
        echo 'update fails';
       }
    }
   


?>