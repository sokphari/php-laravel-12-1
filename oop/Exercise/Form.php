<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <form action="" method="post">
                <div>
                    <input type="text" name="username">
                </div>
                <div>
                    <select name="gender">
                        <option value="" disabled selected>Selected Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <input type="number" name="basesalary">
                </div>
                <div>
                    <select name="work_position">
                        <option value="" disabled selected>Selected Position</option>
                        <option value="Web-Backend">Web-Bckend</option>
                        <option value="Web-Frontend">Web-Frontend</option>
                        <option value="IT-Support">IT-Support</option>
                    </select>
                </div>
                <button type="submit" name="btnSave">Save</button>
            </form>
            <?php
            include('Work.php');
            if(isset($_POST['btnSave'])){
                $username = $_POST['username'];
                $gender = $_POST['gender'];
                $basesalary = $_POST['basesalary'];
                $work_position = $_POST['work_position'];

                //create object
                $employee = new Work($username,$gender,$basesalary,$work_position);
                $employee->getAllData();
                $employee->income($basesalary);
            }else{
                echo 'Data Empty right now';
            }
            
            ?>
        </div>
    </div>
</body>
</html>