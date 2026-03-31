<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="product_id" placeholder="Enter ID"> 
        <br> <br>
        <input type="text" name="product_name" placeholder="Enter Name"> 
        <br> <br>
        <input type="number" name="product_price" placeholder="Enter Price">
         <br> <br>
        <input type="number" name="product_qty" placeholder="Enter Qty" >
         <br> <br>
        <input type="number" name="product_stock" placeholder="Enter Stock"> 
        <br> <br>
        <button type="submit" name="btnSave">save</button>
    </form>
    <?php
        if(isset($_POST['btnSave'])){
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $product_qty = $_POST['product_qty'];
            $product_stock = $_POST['product_stock'];
            echo $product_id.'<br>';
            echo $product_name.'<br>';
            echo $product_qty.'<br>';
            echo $product_stock.'<br>';
        }else{
            echo 'data empty';
        }
    ?>
</body>
</html>