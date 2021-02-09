<?php
require_once("../../../config/connection.php");
 
session_start();
 
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

$msg="";
$msg1="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["email"]))
	{
         if($_POST["email"]=="")
      {
         $msg1="Please Enter Email ";
      }
     
		$email = $_POST["email"];
		
		if($email!='')
		{
			$sql = "select * from user where email = '".$email."' and is_admin=1";
			
			$result = mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);

				$otp = mt_rand(000000,999999);
				
				$query ="update user set otp = '".$otp."' , otpused = 0 where email ='".$email."'";
				$result1 = mysqli_query($conn,$query);
		
				if($result1)
				{

					$message = "<h3>Your Reset Password OTP is '".$otp."'. Please do not share.<br> Agricluture Hub never calls you asking for OTP. </h3>";
					$subject = "Request For OTP";
					$mailSent = send_mail($email, $message, $subject);
					if($mailSent)
					{
					
						$_SESSION['id'] =$email;
						echo "<script>
								window.location ='reset.php' 
							</script>"; 
					}
					else
					{
					$msg= "mail not send";
					}

					
			    }
                
		    }
            else
                    {
                    $msg= "Worng Email Mail Not Send....!!";
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
                                <input class="form-control" type="text"  name="email" placeholder="email"> </div>
                                <span style="color: red"><?php echo $msg1;?></span>
                        </div>
                        
                      
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Send OTP</button>
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