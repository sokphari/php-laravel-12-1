<?php
    include 'config.php';
    if(!isset($_GET['id'])){
        die("id not found");
    }
    $id = intval($_GET['id']);

    $delteDb = "DELETE FROM `gellery_tb` WHERE `id` = '$id'";

    $conn->query($delteDb);
 
    if($conn->query($delteDb)){
        echo "<script>alert('delete gellery success')</script>";
        header('location: index.php');
        exit();
    }else{
        echo 'fails';
    }

    