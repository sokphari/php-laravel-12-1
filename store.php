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

    //check image
    if(!isset($_FILES['image']) || $_FILES['image']['error'] !== 0){
        die('invalid image file');
    }

    $dir = 'images/';
    $imageName = time().'_'. $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $imagePath = $dir . $imageName;

    
    if(!move_uploaded_file($imageTmp,$imagePath)){
        die('failed to upload image');
    }

    $insertDB = "INSERT INTO `gellery_tb` 
    (`title`,`description`,`location`,`mood`,`image`)
    VALUES 
    ('$title','$des','$location','$mood','$imagePath') ";

    if ($conn->query($insertDB)) {
       header('location: index.php');
       exit();
    } else {
        echo 'please check database';
    }
} catch (Exception $e) {
    echo 'error' . $e->getMessage();
}
