<?php
    include 'DBconnect.php';
    try{

    #========Query Sql Delete========
    // $deleteDb = "DELETE FROM `users_tb` WHERE `user_id`= 4";

    $delete = "UPDATE `users_tb` SET `is_active` = 0 WHERE `user_id` = 1 ";

    #========Execute code to db======
    // $result = $connect->query($delete);
    $result = mysqli_query($connect,$delete);

    if($result){
        echo 'delete user found ';
    }else{
        echo 'delete fails ';
    }

    }catch(Exception $e){
        echo ''.$e->getMessage();
    }
?>