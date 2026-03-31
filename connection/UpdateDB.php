<?php
    include 'DBconnect.php';
    try{

    #=========Query Sql Update=========
    $updateDB = "UPDATE `users_tb` SET `username`='sok',`gender`='female',
    `dob`='1999-02-12',`phone`='123456789',`salary`=10000 WHERE `user_id` = 1 
    ";

    #=========Excecute Query to db========
    $result = $connect->query($updateDB);
    if($result){
        echo 'success update ';
    }else{
        echo 'error';
    }
    
    }catch(Exception $e){
        echo ''.$e->getMessage();
    }
?>