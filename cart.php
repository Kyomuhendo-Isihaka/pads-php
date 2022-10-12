<?php

session_start();

require_once("include/dbcon.php");
require_once("include/component.php");

// $db = new CreatDB('pads','productcttb');

if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach ($_SESSION['cart']as $key => $value) {
            
            if($value['product_id']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo"<script>alert('product has been Removed....!')</script>";
                echo"<script>window.location='cart.php'</script>";
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/products.css">

<style>
img {
    width: 100%;
    height: 100px;
}
</style>

</head>

<body class="bg-light">
    <?php require_once("include/header.php");?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>
                    <?php
                    $total=0;
                        if(isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'],'product_id');
                        $sql = "SELECT * FROM products";
                        $results  =mysqli_query($con,$sql);
                        $total=0;
                        if($results){
                            while($row=mysqli_fetch_assoc($results)){
                                foreach($product_id as $id){
                                    if($row['product_id']==$id){
                            cartElement($row['product_price'],$row['product_image'],$row['product_name'],$row['product_id']);
                            $total = $total+(int)$row['product_price'];
                        }
                    }
                        
                        }
                    }
                    }else{
                        echo"<h5>Cart is Empty</h5>";
                    }
                    
                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                                    if(isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo"<h6>Price($count items)</h6>";
                                    }else{
                                        echo"<h6>Price(0 items)</h6>";
                                    }
                                ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>Ugshs<?php echo $total;?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>Ugshs<?php
                                echo $total?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
</body>

</html>