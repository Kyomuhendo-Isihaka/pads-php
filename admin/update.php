<?php
include('include/dbcon.php');

$id =$_GET['updateid'];
$sql = "SELECT * FROM products WHERE product_id =$id";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

$name = $row['product_name'];
$img = $row['product_image'];
$price = $row['product_price'];
// $password = $row['password'];
if(isset($_POST['update'])){
    $name=$_POST['p_name'];
    $img=$_POST['p_image'];
    $price=$_POST['p_price'];
    // $password=$_POST['password'];
    $sql = "UPDATE products SET product_name = '$name', product_price = '$price', product_image='images/$img' WHERE product_id=$id";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo"<script>alert('One product was updated')</script>";
        echo"<script>window.open('product.php','_self')</script>";

    }else{
        die(mysqli_error($con));
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
<div class="container">
        <div class="row mx-auto">
            <div class=" text-center" style=" margin-top:100px">
                <form action="" method="POST">
                    <table class="table table-bordered" >
                       <tr><thead><h3 align="center">Update a product<h3></thead></tr>
                        <tbody>
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" class="form-control" name="p_name" value="<?php echo$name?>" id=""></td>
                            </tr>
                            <tr>
                                <td>Product price</td>
                                <td><input type="text" class="form-control" name="p_price" value="<?php echo$price?>" id=""></td>
                            </tr>
                            <tr>
                                <td>Product Image</td>
                                
                                <td><input type="file" class="form-control" value="<?php echo$img?>" name="p_image" id="file"style="display:none;"><label for="file"><i class="fa fa-upload"></i></label></td>
                            </tr>
                            
                            <tr>
                            
                                <td></td>
                                <td> <button class="btn" type="submit" name = "update">Update</button><td>
                            </tr>
                        </tbody>
                    </table>
                 
       
    </form>

    </div>
</body>
</html>