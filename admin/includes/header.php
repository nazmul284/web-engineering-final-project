<?php 
include("connection.php");
?> 

<!doctype html>
<html>
    <head>

        <title>E-Learning</title>

        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">       
        <link rel="stylesheet" href="css/footer.css">   
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
                        if(!isset($_SESSION['user_name'])):?>
                        <?php else: ?>
                        <li><strong>Hello, <?php echo $_SESSION['user_name'];?></strong></li><br>
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
    </div>
</header>
 