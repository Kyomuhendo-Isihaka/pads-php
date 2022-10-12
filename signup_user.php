<?php
include('include/dbcon.php');

    if(isset($_POST['sign_up'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['pass_conf'];

        if($pass!=$confirm){
        
            echo "<script>alert('password don't match')</script>";
            header("location:signup.php");
        }else if($pass==""){
            echo "<script>alert('please put password')</script>";
        }
        
        
        else{
            $sql = "INSERT INTO customers(user_name,user_phone,user_email, user_password) VALUES('$name','$phone','$email','$pass')";

            $query = mysqli_query($con,$sql);

        if($query){
            echo"<script>alert('congragulation $name! you have been registered success fully')</script>";
            
            echo "<script>window.open('signin.php','_self')</script>";
            
        }else{
            echo"<script>alert('Signup failed try again!')</script>";
        }
        }
    }

?>