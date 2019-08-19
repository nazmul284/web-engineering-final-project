<?php 
include("connection.php");
?> 

<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>E-Learning</title>
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
<header class="header_area">
    <div class="container">
        <div class="row top_header">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="loginreg">
                    <ul>
                        <?php 
                        session_start();    
                        if(!isset($_SESSION['luser_name'])):?>
                        <li><a href="./login.php">Learner's Login</a></li>
                        <li><a href="./registration.php">Become Learner</a></li>
                        <?php else: ?>
                        <li><strong>Hello, <?php echo $_SESSION['luser_name'];?><span>    </span></strong></li><br>
                        <li><a href="logout.php">Logout</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row logo_area">
            <div class="col-md-6 col-sm-6- col-xs-12">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="E-learning"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact_header pull-right text-right">
                    <p><strong>Email: </strong>admin@admin.com</p> 
                    <p><strong>Phone: </strong>+8801000000000</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php include("frontend_menus.php");?>
        </div>
    </div>
</header>