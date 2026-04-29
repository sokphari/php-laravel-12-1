<?php
    include 'config.php';
    //check method request
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        die('bad request');
    }
    //check validate
    if(empty($_POST['name']) || empty($_POST['email'])){
        die('name and email is required');
    }
    
    // sokphari@gmail.com && 1234567
    // sokphari@gmail.com &&  1234567 
    // <script>alert('hello')</script>
    // <script>alert('123456')</script>
    
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $contact = htmlspecialchars($_POST['contact']);
    $salary  = htmlspecialchars($_POST['salary']);
    $email  = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $insert = "INSERT INTO ajax_tb (`name`,`gender`,`contact`,`salary`,`email`,`password`)
    values
    ('$name','$gender','$contact','$salary','$email','$password')";
    if($conn->query($insert)){
        echo 'success';
    }else{
        echo 'insert fails';
    }