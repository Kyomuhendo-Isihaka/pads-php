<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sexual Reproductive Health and Rights Awareness-Growth Care Uganda</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   </head>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand">
            <h6 class="px-5">
                <i class="fa fa-server">shopping cart</i>
            </h6>
        </a>
        <div class="col-md-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNavAltMarkup" aria-controls=
        "navbarNavAltMarkup" aria-expand="false" aria-lable="toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkuo">
                <div class="mr-auto">
                    <div class="navbar-nav">
                        <a href="cart.php" class="nav-item nav-link active">
                            <h5 class="px-5 cart">
                                <i class="fa fa-shopping-cart">cart</i>
                                <?php
                        
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo"<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo"<span id='cart_count' class=\"text-warning bg-light\">0</span>";
                                }

                                ?>
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
    </nav>
</header>



<script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>