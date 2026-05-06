<?php
    include '../config.php';
    //check request method
    // if(!isset($_POST['register'])){
    //     die("Bad Request please check again ?");
    // }
    try{
        global $config;
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
               header('location: ../Auth/FormLogin.php');
               exit;
            }else{
                echo 'register fails';
            }
        }
    }catch(Exception $e){
        echo ''.$e->getMessage();
    }

    if(isset($_POST['login'])){
         if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
            $email = $_POST['email'];
            $password = $_POST['password'];
            global $config;

            $sql = "SELECT `email`,`password`,`role` FROM `tb_users` WHERE `email`='$email' AND `password`='$password'";
            $result = mysqli_query($config,$sql);
            $user = $result->fetch_assoc();
            setcookie('is_login',$user['email'],time()+3600,"/");
            setcookie('role',$user['role'],time()+3600,"/");
            if($user['role'] == 0){
                header('location: ../Client/index.php');
                exit();
            }else{
                header('location: ../Admin/index.php');
                exit();
            }
    }
    // 60  * 60 = 3600





    // user customer staff 