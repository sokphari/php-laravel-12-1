<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .form{
            width: 500px;
            height: 650px;
            margin: 70px 0px 0px 0px;
            box-shadow: 0px 5px 5px red;
            border-radius: 20px;
            padding: 80px 20px 0px 20px;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
    </style>
<body>
    <div class="container">
        <div class="form">
            <div>
                <h2 class="text-center my-3">Form Employeee</h2>
            </div>
            <form action="./Controllers/InsertDB.php" method="post">
                <div class="mb-3 form-group">
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3 form-group">
                    <select class="form-control" name="gender">
                        <option value="" selected disabled>Seleted Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3 form-group">
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="mb-3 form-group">
                    <select class="form-control" name="position">
                        <option value="" selected disabled>Selected Position</option>
                        <option value="manager">manager</option>
                        <option value="database">database</option>
                        <option value="hr">hr</option>
                        <option value="devops">devops</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <input type="date" class="form-control" name="hire_date">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success" name="saveBtn">Create Account</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>