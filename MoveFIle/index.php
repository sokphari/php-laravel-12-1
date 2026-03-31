<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveFile</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <button name="BtnSave" type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['BtnSave'])){
        $fileName = time() . '_' .$_FILES['image']['name']; //12345678.jpg , 123456789,png
        $tmp = $_FILES['image']['tmp_name']; //jpg,png,pdf,svg
        $path = './uploads/'.$fileName;
        move_uploaded_file($tmp,$path);
        echo '
            <img src="./uploads/'.$fileName.'" alt="">
        ';
    }
?>