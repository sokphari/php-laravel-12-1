    <?php
    //include file db
    include 'DBconnect.php';
    try {

        #=========Query Insert to db========
        $insertDB = "INSERT INTO `users_tb`
        (`username`,`gender`,`dob`,`phone`,`is_active`,`salary`) 
        values
        ('sokpeak','male','2000-04-20','0876543',1,500)
        ";
        #========Excecute code to db ======

        $result = $connect->query($insertDB);
        if ($result) {
            echo '<script>alert("Insert Data To DB Successfully ✅")</script>';
        } else {
            echo 'Error';
        }
        
    } catch (Exception $e) {
        echo '' . $e->getMessage();
    }
