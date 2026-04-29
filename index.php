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
            <button type="button" id="AddUser" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + Add Customer
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modelTitle">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="hidden" name="id" id="id>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" id="BtnSave" class="btn btn-warning">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // let add = document.getElementById('BtnSave')
        $(document).ready(function(){
            $("#AddUser").click(function(){
                $("#modelTitle").text("Add User")
                $("#id").val('')
                $("#name").val('123')
                $("#gender").val('')
                $("#contact").val('')
                $("#salary").val('')
                $("#email").val('')
                $("#password").val('')
            })
            $("#BtnSave").click(function(){
                // get value from form
                // let name = document.getElementById("name").value
                let id = $("#id").val()
                let name = $("#name").val()
                let gender = $("#gender").val()
                let contact = $("#contact").val()
                let salary = $("#salary").val()
                let email = $("#email").val()
                let password = $("#password").val()
                // console.log(name)
                // console.log(password)
                ///check validate
                if(!name || !email || !password){
                    alert("name and email and password id required")
                    return;
                }
                let url = id ? 'update.php' : 'store.php';
                let data = id ? 
                {id,name,gender,contact,salary,email,password} 
                : {name,gender,contact,salary,email,password}
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (response) {
                        if(response.trim() === 'success'){
                            alert("Insert Data right now success")
                        }else{
                            alert("insert fails")
                        }
                    }
                });
            })
        })
    </script>
</html>