
<?php 
require_once("../../../config/connection.php"); 

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
 $id=$_SESSION['id'];
 $otp=$_POST['otp'];
 $npass=$_POST['newpassword'];
 $cpass=$_POST['cpassword'];

 if($npass != $cpass) {
    echo "password must be same";
    exit;
 }
 $query = "update user set otpused =1, password = '".$npass."' where email='".$id."' and otp ='".$otp."'";

 echo $query;

 $result = mysqli_query($conn, $query);
 if($result) {

    echo "<script>
           alert('password sucessfully reset !');
           window.location='login.php';
           </script>";
    
 }


$msg1="";
$msg2="";
$msg="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["email"]) && isset($_POST["password"]))
    {


        if($_POST["email"]=="")
        {
            $msg1="plz Enter username";
        }

        if ($_POST["password"]=="")
         {
            $msg2="plz Enter Password";
        }

        $email = $_POST["email"];
        $pwd = $_POST["password"];
        
        if($email!='' && $pwd!='')
        {
            $sql = "select * from user where email = '".$email."'
            and password = '".$pwd."' and is_admin=1";
            
            //echo $sql;
            //die;
            
            $result = mysqli_query($conn,$sql);
                
            if(mysqli_num_rows($result)==1)
            {
                $row = mysqli_fetch_array($result);
                
                $_SESSION['email'] = $row['user_name'];
                
                header ("Location:user.php");
            }
            else
            {
                $msg = "Invalid email and password";
            }
        }
        else
        {
            echo "NULL VALUE";
        }
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:16:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    
    <!-- page css -->
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="" method="post">
                        <h3 class="text-center m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" placeholder="email"> 
                                <span style="color: red" > <?php echo $msg1; ?></span>
                            </div>



                                
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <span style="color: red"> <?php echo $msg2; ?> </span>
                            </div>
                                
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center"> 
                                    <div class="ml-auto">
                                        <a href="forgot.php" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <span style="color:red"><?php echo $msg;?></span>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="http://eliteadmin.themedesigner.in/demos/bt4/inverse/index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:16:59 GMT -->
</html>