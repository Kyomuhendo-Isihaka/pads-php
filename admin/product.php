<?php
include('include/dbcon.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Admin</title>   
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-success my-5"><a href="product_add.php" class="text-light">Add New Product</a></button>
    <table class="table">
        <tr>
        <thead>
                <th class="scope col">s1 No</th>
                <th class="scope col">product Name</th>
                <th class="scope col">product image</th>
                <th class="scope col">product price</th>
                
        </thead>
        </tr>
        <tbody>
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['product_id'];
                    $name=$row['product_name'];
                    $img=$row['product_image'];
                    $price=$row['product_price'];
                    // $password = $row['password'];
                    
                    echo '
                    <tr>
                <th scope ="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$img.'</td>
                <td>'.$price.'</td>
                
                <td class="d-flex ">
                    <button class="btn mr-2 btn-warning text-light"><a href="update.php?updateid='.$id.'">Update</a></button>
                    <button class="btn p-2 btn-danger text-light"><a href="delete_product.php?deleteid='.$id.'">Delete</a></button>
                    
                </td>
                
            </tr>
                    ';

                    
                    
                } 
            }

            ?>
            
        </tbody>



    </table>
</div>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
</body>
</html>