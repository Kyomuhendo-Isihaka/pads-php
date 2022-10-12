<?php

    session_start();
    include("include/dbcon.php"); 
    require_once('include/component.php');


    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){

            $item_array_id=array_column($_SESSION['cart'], "product_id");
            
            if(in_array($_POST['product_id'],$item_array_id)){
                echo"<script>alert('product is already added in the cart..!')</script>";
                echo"<script>window.location='product.php'></script>";
            }else{
                $count=count($_SESSION['cart']);
                $item_array=array(
                    'product_id'=>$_POST['product_id']
                );
                $_SESSION['cart'][$count]=$item_array;
        
            }

        }else{
            $item_array= array(
                'product_id'=>$_POST['product_id']
            );

            $_SESSION['cart'][0]=$item_array;
            // print_r($_SESSION['cart']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexual Reproductive Health and Rights Awareness-Growth Care Uganda</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/products.css">
</head>
<?php include("include/header.php");?>
    <body>
    <div class="container mx-auto">
        <div class="row mt-4 mx-auto">
            <?php
            $sql = "SELECT * FROM products";
            $results  =mysqli_query($con,$sql);
            if($results){
                while($row=mysqli_fetch_assoc($results)){
                    component($row['product_name'],$row['product_price'],$row['product_image'], $row['product_id']);
                }
            }       
            ?>   
        </div>
    </div>
    <hr>
        
        <?php include("include/footer.php");?>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
</body>
</html>
<?php?>