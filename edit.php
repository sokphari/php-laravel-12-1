<?php
    include 'config.php';
    try{
        if(!isset($_GET['id'])){
            die("id not found");
        }
        $id = intval($_GET['id']);
        $select = "SELECT * FROM `gellery_tb` WHERE `id`='$id'";
        $res = $conn->query($select);
        $row = $res->fetch_assoc();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(empty($_POST['title']) || empty($_POST['des'])){
                die('invlid title and description');
            }
            $title = trim($_POST['title'] ?? '');
            $des = trim($_POST['des'] ?? '');
            $location = trim($_POST['location'] ?? '');
            $mood = trim($_POST['mood'] ?? '');

            if(!isset($_FILES['image'])){
                die('invalid image file');
            }
            $dir = 'images/';
            $imageName = time().'_'. $_FILES['image']['name'];
            $imageTmp = $_FILES['image']['tmp_name'];
            $imagePath = $dir . $imageName;
            if(!move_uploaded_file($imageTmp,$imagePath)){
                die('failed to upload image');
            }
            $updateDb = "UPDATE `gellery_tb` SET `title`='$title',`description`='$des',`location`='$location',`mood`='$mood',`image`='$imagePath'";
            if($conn->query($updateDb)){
                header('location: index.php');
                exit();
            }else{
                echo 'please check database';
            }
        }

    }catch(Exception $e){
        echo 'error'.$e->getMessage();
    }
    ?>
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
        <!-- file text number -->
        <form action="" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="" class="form-label">💬 Title*</label>
                <input type="text" value="<?php echo $row['title'] ?>" name="title" class="form-control" placeholder="enter titile">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">🗨️ Description*</label>
                <input type="text" value="<?php echo $row['description']?>" name="des" class="form-control" placeholder="enter descriptoin">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">📍 Location*</label>
                <input type="text" value="<?php echo $row['location']?>" name="location" class="form-control" placeholder="enter location ">
            </div>
            <div class="mb-3">
                <select name="mood" class="form-control">
                    <option value="" disabled selected>Selected Mood</option>
                    <option value="sad" <?= $row['mood'] == 'sad' ? 'selected' : '' ?>>🥹 Sad</option>
                    <option value="relax" <?= $row['mood'] == 'relax' ? 'selected' : '' ?>>🤗 Relax</option>
                    <option value="happy" <?= $row['mood'] == 'happy' ? 'selected' : '' ?>>😃 Happy</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">📸 Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="d-flex justify-content-between py-3">
                <button class="btn btn-danger" type="reset">😣 Cancel</button>
                <button class="btn btn-primary" type="submit">#️⃣ Update</button>
            </div>
        </form>
    </div>
</body>
</html>