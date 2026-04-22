<?php
include 'config.php';
try {
    //check sever request method
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die("Bad Request method");
    }
    //check validate
    if (empty($_POST['title'] || empty($_POST['des']))) {
        die('invlid title and description');
    }


    $title = trim($_POST['title'] ?? '');
    $des   = trim($_POST['des'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $mood  = trim($_POST['mood'] ?? '');
    
    $insertDB = "INSERT INTO `gellery_tb` 
    (`title`,`description`,`location`,`mood`)
    VALUES 
    ('$title','$des','$location','$mood') ";

    if ($conn->query($insertDB)) {
       header('location: index.php');
       exit();
    } else {
        echo 'please check database';
    }
} catch (Exception $e) {
    echo 'error' . $e->getMessage();
}
