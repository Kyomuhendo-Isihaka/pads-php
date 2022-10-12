<?php
    require_once("include/dbcon.php");
    session_start();

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
     .card{
        align-self: center;
        margin: 100px;
        border-radius: 15px;
     }
     img{
        margin-left: 150px;
     }
     input{
        padding:15px
     }
    </style>
</head>
<body>
    <div class="container">
        <div class="card w-75">
            <a href=""><img src="./images/Growth care Uganda logo.png" alt=""></a>
        <h2 class="text-center">Sign In</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">User email</label>
                <input class="form-control" type="email" name="email" id="">
                <label for="">User Password</label>
                <input class="form-control" type="password" name="password" id="">

                <button type="submit" name="sign_in" class="btn mt-4 btn-primary form-control">Sign In</button>
            </div>
            <?php
            if(isset($_POST['sign_in'])){
                $email = $_POST['email'] ;
                $password =$_POST['password'];
        
                $select_user = "SELECT * FROM customers WHERE user_email='$email' AND user_password = '$password'";
        
                $query = mysqli_query($con, $select_user);
                $check_user = mysqli_num_rows($query);
        
                if($check_user ==1){
                    $_SESSION['user_email'] = $email;
        
                    $update_msg = mysqli_query($con, "UPDATE customers SET log_in='online' WHERE user_email = '$email'");
        
                    $user = $_SESSION['user_email'];
                    $get_user = "SELECT * FROM customers WHERE user_email = '$user'";
                    $run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
        
                    $name = $row['name'];
        
                    echo "<script>window.open('cart.php', '_self')</script>";
                }
                else{
                    echo"
                    <div class='alert alert-danger'>
                        <strong>Check your email and password </strong>
                    </div>
                    ";
        
        
                    
                }
            }
            ?>
            
        </form>
        </div>
    </div>
</body>
</html>