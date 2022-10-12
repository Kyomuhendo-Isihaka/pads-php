<?php
include('include/dbcon.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql = "DELETE FROM products WHERE product_id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:product.php');
        echo"<script>alert('one product was delete!')</script>";
    }else{
        die(mysqli_error($con));
    }

}

?>

