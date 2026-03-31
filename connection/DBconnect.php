<?php
    try{
        $connect = new mysqli(
            'localhost',
            'root',
            '',
            'users_db',
            3306
            );

        // if($connect){
        //     echo "connetion successfully ✅";
        // }else{
        //     echo "fails connection ⛔";
        // }

    }catch(Exception $e){
        echo ''.$e->getMessage();
    }