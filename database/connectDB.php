<?php
    try{
        $config = new mysqli('127.0.0.1','root','','php-12-1',3306);
        // if(!$config){
        //     echo 'errror connection ⛔';
        // }else{
        //     die('connection successfully ✅');
        // }
    }catch(Exception $e){
        echo ''.$e->getMessage();
    }
