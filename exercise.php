
<?php
    //variable
    $id = 1;
    $name = "Navit";
    $gender = "Male";
    $address = 'PP';

    $id1 = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5 ">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>ADDRESS</th>
                    <th>PROFILE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name?></td>
                    <td><?php echo $gender?></td>
                    <td><?php echo $address?></td>
                    <td><img src="https://i.pinimg.com/474x/99/5c/46/995c46fb3db7da44434d14ba5264e00c.jpg" width="80" height="80" alt=""></td>
                    <td>
                        <button type="submit" class="btn btn-primary">DELETE</button>
                        <button type="submit" class="btn btn-warning">EDIT</button>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $id1?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>