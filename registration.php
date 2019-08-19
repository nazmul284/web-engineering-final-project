<?php 
include('includes/connection.php');
?>
<!doctype html>
<html>
    <head>
        <title>Become A Learner</title>
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
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
                           <h2 style="text-align:center;margin:20px 0;">Become A Learner</h2>
                            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST"> 
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                                    <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name">                                        
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-fire"></i></span>
                                    <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name">                                        
                                </div> 
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="uemail" type="email" class="form-control" name="uemail" placeholder="User Email">                                        
                                </div> 
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="user" type="text" class="form-control" name="user" placeholder="User">                                        
                                </div> 
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>  
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" value="Submit" class="btn btn-primary pull-right" name="register"/>                         
                                    </div>
                                </div>
                                <p style="color:#fff;font-size:16px;">Already an Instructor?? Login <strong><a href="login.php">Here</a></strong> </p>
                            </form>
                            <p style="margin:20px 0;color:#222;text-align:center;font-size:18px;">Go back to the <strong><a href="index.php">Site</a></strong> </p>      
                        </div>
                    </div>
                </div>
            </div> 
        </section>

<?php 
if(isset($_POST['register'])){
$fname = mysqli_real_escape_string ($con,$_POST['fname']);  
$lname = mysqli_real_escape_string ($con,$_POST['lname']);  
$uemail = $_POST['uemail'];  
$user = mysqli_real_escape_string ($con,$_POST['user']);     
$pass = mysqli_real_escape_string($con,$_POST['password']); 

 
        if($fname == '' OR $lname == '' OR $uemail == '' OR $user == '' OR $pass == '' ){
    echo "<script>alert('Please Fill All The Fields')</script>";
        exit();
    }
    else{
    $email_check = "select * from learners where luser_email='$uemail'";
    $username_check = "select * from learners where luser_name='$user'";
    $run_email = mysqli_query($con,$email_check); 
    $run_username = mysqli_query($con,$username_check); 
    if(mysqli_num_rows( $run_email ) > 0 ){ 
        echo "<script>alert('$uemail Already Exist!!');</script>"; 
 
    }
    elseif(mysqli_num_rows( $run_username ) > 0 ){ 
        echo "<script>alert('Username $user Already Exist!!');</script>"; 
 
    }else{
    $insert_user = "insert into learners (luser_fname,luser_lname,luser_email,luser_name,luser_pass) values('$fname','$lname','$uemail','$user','$pass')";
$run_reg = mysqli_query($con,$insert_user); 
        if($run_reg){
            echo "<script>alert('Registration Successfully!!Please Login!!')</script>";
            echo "<script>window.open('login.php','_self');</script>"; 
        }
    }
    }
    
}        
        
?>         
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>   