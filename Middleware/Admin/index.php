<?php 
    include '../config.php';
    if(!isset($_COOKIE['is_login'])){
        header('location: ../Auth/FormLogin.php');
    }else{
        if($user && $user['role'] != 1){
            header('location: ../Client/index.php');
            exit;
        }
    }
?>
<h3>Welcome to admin</h3>
<a href="../Auth/FormLogout.php">Logout</a>