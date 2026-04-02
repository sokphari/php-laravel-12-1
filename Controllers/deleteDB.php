<?php
        include '../database/connectDB.php';
        // try{
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                $deleteDb = "DELETE FROM `employee_tb` WHERE `emp_id` = '$id' ";
                $rest = $config->query($deleteDb);
                if($rest){
                    header('location: ../index.php');
                }else{
                    echo 'error';
                }
            }
        // }catch(Exception $e){
        //     echo ''.$e->getMessage();
        // }