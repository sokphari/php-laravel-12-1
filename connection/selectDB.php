<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Dob</th>
            <th>Phone</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include 'DBconnect.php';
        #=========Query Selected=======
        $selectDb = "SELECT * FROM `users_tb` WHERE `is_active` = 0 ORDER BY `user_id` DESC";
        #=========Excecute code to db==
        $res = $connect->query($selectDb);
        if ($res) {
            while ($row = $res->fetch_assoc()) {
                echo '
                            <tr>
                            <td>' . $row['user_id'] . '</td>
                            <td>' . $row['username'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['dob'] . '</td>
                            <td>' . $row['phone'] . '</td>
                            <td>' . $row['salary'] . '</td>
                       </tr>
                        ';
            }
        } else {
            echo 'Error not found';
        }
        ?>
    </tbody>
</table>