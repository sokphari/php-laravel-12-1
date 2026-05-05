<?php
    include 'config.php';
    //check request method
    if(!isset($_POST['register'])){
        die("Bad Request please check again ?");
    }
    try{
        if(isset($_POST['register'])){
            $name = htmlspecialchars($_POST['name']);
            $gender = htmlspecialchars($_POST['gender']);
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
            $email = $_POST['email'];
            $password = $_POST['password'];

            // sql query
            $sql = "INSERT INTO `tb_users` 
            (`name`,`gender`,`email`,`password`)
            values
            ('$name','$gender','$email','$password')
            ";
            // Excecute query
            $result = $config->query($sql);
            if($result){
                echo 'register successfully';
            }else{
                echo 'register fails';
            }
        }
    }catch(Exception $e){
        echo ''.$e->getMessage();
    }