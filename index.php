<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container pt-5">
        <div class="d-flex justify-content-between">
            <h4>List Customer</h4>
            <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + Add Customer
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="">✒️ Name*</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Entet Name">
                        </div>
                        <div class="mb-3">
                            <label for="">♀️ Gender*</label>
                            <input class="form-control" type="text" name="gender" id="gender" placeholder="Enter Gender">
                        </div>
                        <div class="mb-3">
                            <label for="">📱 contact*</label>
                            <input class="form-control" type="text" name="contact" id="contact" placeholder="Enter Contact">
                        </div>
                        <div class="mb-3">
                            <label for="">💵 salary*</label>
                            <input class="form-control" type="number" name="salary" id="salary" placeholder="Enter Salary">
                        </div>
                        <div class="mb-3">
                            <label for="">📩 Email*</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="example@ectec.com">
                        </div>
                        <div class="mb-3">
                            <label for="">🔑 Password*</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="**********">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>