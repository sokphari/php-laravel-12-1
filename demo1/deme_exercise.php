<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!-- form score calculator -->
    <div class="container px-5">
        <form method="post">
            <div class="form-group my-3">
                <input class="form-control" type="number" name="sc1" placeholder="Enter Score1">
            </div>
            <div class="form-group my-3">
                <input class="form-control" type="number" name="sc2" placeholder="Enter Score2">
            </div>
            <div class="form-group my-3">
                <input class="form-control" type="number" name="sc3" placeholder="Enter Score3">
            </div>
            <div class="form-group my-3">
                <input class="form-control" type="number" name="sc4" placeholder="Enter Score4">
            </div>
            <div class="form-group my-3">
                <input class="form-control" type="number" name="sc5" placeholder="Enter Score5">
            </div>
            <div class="form-group my-3">
                <button type="submit" name="btnSave" class="btn btn-warning">Save</button>
            </div>
        </form>
        <?php
            if(isset($_POST['btnSave'])){
                $sc1 = $_POST['sc1'];
                $sc2 = $_POST['sc2'];
                $sc3 = $_POST['sc3'];
                $sc4 = $_POST['sc4'];
                $sc5 = $_POST['sc5'];
                $total_score = $sc1 + $sc2 + $sc3 + $sc4 + $sc5;
                $average = $total_score/5;
                
                echo "Result Total Score = ".$total_score.'<br>';
                echo "Result Average = ".$average;
            }else{
                echo 'Data Not Found';
            }
        ?>
    </div>
</body>
</html>