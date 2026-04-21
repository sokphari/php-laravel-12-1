<?php
    try{
        $conn  = new mysqli('localhost','root','','gellery_db');
        // if($conn){
        //     echo 'connection successfully';
        // }else{
        //     echo 'error connection';
        // }
    }catch(Exception $e){
        echo 'error'.$e->getMessage();
    }