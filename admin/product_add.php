<?php
include("include/dbcon.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-products</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
</head>
<body>
  
    <div class="container">
        <div class="row mx-auto">
            <div class=" text-center" style=" margin-top:100px">
                <form action="" method="POST">
                    <table class="table table-bordered" >
                       <tr><thead><h3 align="center">Add a New product<h3></thead></tr>
                        <tbody>
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" class="form-control" name="p_name" id=""></td>
                            </tr>
                            <tr>
                                <td>Product price</td>
                                <td><input type="text" class="form-control" name="p_price" id=""></td>
                            </tr>
                            <tr>
                                <td>Product Image</td>
                                
                                <td><input type="file" class="form-control" name="p_image" id="file"style="display:none;"><label for="file"><i class="fa fa-upload"></i></label></td>
                            </tr>
                            
                            <tr>
                            
                                <td></td>
                                <td><button class="btn btn-success" type="submit" name="add_pdt">Add product</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        if(isset($_POST['add_pdt'])){
                            $pdtname = $_POST['p_name'];
                            $pdtprice = $_POST['p_price'];
                            $pdtimage = $_POST['p_image'];

                            $sql = "INSERT INTO products(product_name,product_price,product_image)VALUES('$pdtname','$pdtprice','images/$pdtimage')";

                            $run = mysqli_query($con,$sql);

                            if($run){
                                echo"<script>alert('1 product was added')</script>";
            
                                echo "<script>window.open('product.php','_self')</script>";
                            }else{
                                echo"<script>alert('Add failed try again! ')</script>";
            
                                echo "<script>window.open('product_add.php','_self')</script>";
                            }
                        }
                    ?>

                </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
</body>
</html>