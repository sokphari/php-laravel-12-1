<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            width: 500px;
            height: 500px;
            padding: 35px 30px;
            margin-top: 80px;
            border-radius: 20px;
        }
    </style>
<body>
    <div class="container">
        <div class="form shadow">
            <h4 class="text-center">Form Login</h4>
            <form action="../Controller/AuthController.php" method="post">
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" name="login"  class="btn mt-2 form-control text-light btn-warning">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>