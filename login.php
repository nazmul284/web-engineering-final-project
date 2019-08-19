<?php 
include('includes/connection.php');
?>
<!doctype html>
<html>
    <head>
        <title>Login</title>
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>        
    </head>
    <body>

        <section class="login_area">
            <div class="container">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="images/logo.png" alt="E-learning">
                        </div>
                        <div class="login_form"> 
                           <h2 style="text-align:center;margin:20px 0;">Learner's Login</h2>
                            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="user" type="text" class="form-control" name="user" placeholder="User" required>                                        
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>                                                                                             <input id="hidden" type="hidden" class="form-control" name="hidden">

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" value="Log In" class="btn btn-primary pull-right" name="login"/>                         
                                    </div>
                                </div>
                                <p style="color:#fff;font-size:16px;">New Here?? Sign Up <strong><a href="registration.php">Here</a></strong> </p>
                            </form>
                            <p style="margin:20px 0;color:#222;text-align:center;font-size:18px;">Go back to the <strong><a href="index.php">Site</a></strong> </p>   
                        </div>
                    </div>
                </div>
            </div> 
        </section>
<?php 
if(isset($_POST['login'])){
$user = $_POST['user'];       
$pass = $_POST['password']; 
$login_query = "select * from learners where luser_name='$user' AND luser_pass='$pass'";
$run_login = mysqli_query($con,$login_query);  
    session_start(); 
    if(mysqli_num_rows( $run_login ) > 0 ){
        $_SESSION['luser_name'] = $user; 
        echo "<script>window.open('index.php','_self');</script>"; 
 
    }
    else{
        echo "<script>alert('Username Or Password is incorrect !!!');</script>";
    }
}        
        
?>                     
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>   