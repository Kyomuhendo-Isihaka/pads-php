<?php include('signup_user.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">

        <h3 class="text-center"><img src="./images/Growth care Uganda logo.png" alt=""></h3>
        <form action="" method = "POST">
            <div class="form-group">
                <label>Usename</label>
                <input type="text" class="form-control" name="name" id="" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" id="" required>
            </div>
            <div class="form-group">
                <label>UserPassword</label>
                <input type="password" class="form-control" name="pass" id="" required>
            </div>
            <div class="form-group">
                <labe>Corfirm Password</labe></label>
                <input type="password" class="form-control" name="pass_conf" id="" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control" type="submit" name="sign_up">Sign Up</button>
            </div>
       
            
            
        </form>
        <p style="text-align:center ;">Alread have account <a href="signin.php">Signin</a></p>
    </div>
    
</body>
</html>