<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container shadow-lg mt-5 rounded py-5 px-5">
        <form action="store.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">💬 Title*</label>
                <input type="text" name="title" class="form-control" placeholder="enter titile">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">🗨️ Description*</label>
                <input type="text" name="des" class="form-control" placeholder="enter descriptoin">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">📍 Location*</label>
                <input type="text" name="location" class="form-control" placeholder="enter location ">
            </div>
            <div class="mb-3">
                <select name="mood" class="form-control">
                    <option value="" disabled selected>Selected Mood</option>
                    <option value="sad">🥹 Sad</option>
                    <option value="relax">🤗 Relax</option>
                    <option value="happy">😃 Happy</option>
                </select>
            </div>
            <div class="d-flex justify-content-between py-3">
                <button class="btn btn-danger" type="reset">😣 Concal</button>
                <button class="btn btn-primary" type="submit">#️⃣ Save</button>
            </div>
        </form>
    </div>
</body>
</html>