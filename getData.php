<?php
    include 'config.php';
    try{
        $selectDat = "SELECT * FROM ajax_tb";
        $result = $conn->query($selectDat);
        if($result){
            while($row = $result->fetch_assoc()){
                echo '
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['gender'].'</td>
                        <td>'.$row['contact'].'</td>
                        <td>'.$row['salary'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['password'].'</td>
                        <td></td>
                    </tr>
                ';  
                }
        }else{
            echo 'error fetch';
        }

    }catch(Exception $e){
        echo 'error fetch'.$e->getMessage();
    }