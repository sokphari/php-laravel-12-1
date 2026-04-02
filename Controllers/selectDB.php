<?php

    include './database/connectDB.php';

    try{
        $selectDb = "SELECT * FROM `employee_tb` ORDER BY `emp_id` DESC";
        $rest = $config->query($selectDb);
        if($rest){
            while($row = $rest->fetch_assoc()){
?>
           <tr>
                <td><?php echo $row['emp_id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['position']?></td>
                <td><?php echo $row['hire_date']?></td>
                <td><?php echo $row['is_active']?></td>
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
<?php
            
            }
        }
    }catch(Exception $e){
        echo ''.$e->getMessage();
    }