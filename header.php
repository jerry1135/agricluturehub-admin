<!DOCTYPE html>
<html lang="en">

<?php


session_start();
//$uid = $_SESSION['user_id'];
require_once("../../../config/connection.php");
if (isset($_SESSION['user_id'])){
    $uid=$_SESSION['user_id'];
}

if(isset($_SESSION['user_id']))
{
 $msg = " user already login"; 
}
else 
{
 header("location:login.php");
}
?>
<?php 
$sql="select * from `user` where user_id='".$uid."'";
 $result =mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);

?>

<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:11:42 GMT -->
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
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css"
        href="../assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="../assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="../assets/readMoreJs.js"></script>
    <script src="../assets/readMoreJs.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Agricluture Hub Admin </p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img  height="90%" width="90%" src="../assets/images/full_logo.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                       
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you
                                                        want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-note"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown"
                                aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="../assets/images/users/1.jpg" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="../assets/images/users/2.jpg" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="../assets/images/users/3.jpg" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="../assets/images/users/4.jpg" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <strong>See all e-Mails</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti-layout-width-default"></i>
                            </a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="../assets/images/big/img1.jpg" alt="First slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="../assets/images/big/img2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="../assets/images/big/img3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> You can give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Forth link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another fifth link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle">
                            <a class="nav-link  waves-effect waves-light" href="javascript:void(0)">
                                <i class="ti-settings"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="../../../image/admin/<?php echo $row["user_image"];?>" alt="user-img" class="img-circle">
                        </div>


                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $row["user_name"];?>
                              <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="pages-profile.php" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="logout.php" class="dropdown-item" >
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li>
                            <a class=" waves-effect waves-dark" href="index.php"
                                aria-expanded="false">
                                <i class="icons-Home"></i>
                                <span class="hide-menu ">
                                    Dashboard 
                                                                   </span>
                            </a>
                        </li>
                      <!--  <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-grid2"></i>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="app-calendar.html">Calendar</a>
                                </li>
                                
                                <li>
                                    <a href="app-ticket.html">Support Ticket</a>
                                </li>
                                <li>
                                    <a href="app-contact.html">Contact / Employee</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="hide-menu">Inbox</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="app-email.html">Mailbox</a>
                                </li>
                                <li>
                                    <a href="app-email-detail.html">Mailbox Detail</a>
                                </li>
                                <li>
                                    <a href="app-compose.html">Compose Mail</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            
                           
                        </li>
                        <li class="nav-small-cap">--- REPORTS & TABLE</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i>
                                <span class="hide-menu">Generate Repots</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                
                                    <a href="Reports/user1.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    User List
                                            </span>
                                     </a>
                                </li>
                                <li>
                                    <a href="Reports/order.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    Accepted Order Report
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Reports/booking.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    Accepted Booking Report
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href= "Reports/package.php" >
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    Total service package Booking List 
                                            </span>
                                     </a>
                                </li>
                                <li>
                                    <a href="order_report.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    All Order List
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicebooking_report.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    All Servicebooking List
                                           </span>
                                   </a>
                                </li>
                                <li>
                                    <a href="Reports/userwiseorder.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    User Total Order Amount
                                           </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Reports/userwisebooking.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                    User Total Servicebooking Amount
                                            </span>
                                    </a>
                                </li>
                                <li>    
                                    <a href="Reports/feedback.php">
                                         <i class="mdi mdi-file-pdf"></i>
                                            <span>   
                                                Feedback                                        
                                            </span>
                                    </a>
                                </li>
                            </ul>
                               <!--
                                    <a href="form-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="form-mask.html">Form Mask</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                                <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                <li>
                                    <a href="form-dropzone.html">File Dropzone</a>
                                </li>
                                <li>
                                    <a href="form-icheck.html">Icheck control</a>
                                </li>
                                <li>
                                    <a href="form-img-cropper.html">Image Cropper</a>
                                </li>
                                <li>
                                    <a href="form-bootstrapwysihtml5.html">HTML5 Editor</a>
                                </li>
                                <li>
                                    <a href="form-typehead.html">Form Typehead</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a href="form-xeditable.html">Xeditable Editor</a>
                                </li>
                                <li>
                                    <a href="form-summernote.html">Summernote Editor</a>
                                </li>
                                <li>
                                    <a href="form-tinymce.html">Tinymce Editor</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="role.php">
                                        <i class="icons-Add-UserStar"></i>
                                <span class="hide-menu">&nbsp;Role</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user.php">
                                        <i class="icon-user"></i>
                                <span class="hide-menu">&nbsp;Users</span>
                                    </a>
                                    
                                </li>
                                <li> 

                                    <a href="category.php">
                                        <i class="icons-Basket-Items"></i>
                                <span class="hide-menu">&nbsp;Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="subcategory.php">
                                        <i class="icons-Basket-Coins"></i>
                                <span class="hide-menu">&nbsp;Sub-category</span>
                                    </a>
                                </li>
                                <li> 
                                    <a href="product.php">
                                         <i class="icons-Flowerpot"></i>
                                <span class="hide-menu">&nbsp; Products</span>
                                    </a>
                                </li>
                                <li>

                                    <a href="productimage.php">
                                        <i class="mdi mdi-folder-multiple-image"></i>
                                <span class="hide-menu">&nbsp; Product Image</span>
                                        
                                    </a>
                                </li>
                                <li>

                                    <a href="city.php">
                                    <i class="mdi mdi-city"></i>
                                <span class="hide-menu">&nbsp; City</span> 
                                    </a>
                                </li>
                                <li> 

                                    <a href="area.php">
                                        <i class="icons-City-Hall"></i>
                                <span class="hide-menu">&nbsp; Area</span>
                                        
                                    </a>
                                </li>
                                <li>

                                    <a href="order.php">
                                        <i class="icons-Shopping-Cart"></i>
                                <span class="hide-menu">&nbsp; Order</span>
                                        
                                    </a>
                                </li>
                         <!--       <li> 

                                    <a href="orderitem.php">
                                         <i class="icons-Bag-Items"></i>
                                <span class="hide-menu">&nbsp; Order Items</span>
                                        
                                    </a>
                                </li> -->
                                <li>
                                    <a href="servicepackage.php">
                                        <i class="icon-layers"></i>
                                <span class="hide-menu">&nbsp; Service Package</span>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="servicebooking.php">
                                         <i class="icon-notebook"></i>
                                <span class="hide-menu">&nbsp; Service Booking</span>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="serviceprovider.php">
                                         <i class="mdi mdi-account-card-details"></i>
                                <span class="hide-menu">&nbsp; Service Provider</span>
                                    </a>
                                </li>
                               <!-- <li>
                                    <a href="payment.php">14.Payment Table</a>
                                </li>-->
                                <li>
                                    <a href="feedback.php">
                                        <i class="icons-Pen-5"></i>
                                <span class="hide-menu">&nbsp; Feedback</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact_us.php">
                                        <i class="icon-layers"></i>
                                <span class="hide-menu">&nbsp; Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       <!-- <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li>
                            
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-location-pin"></i>
                                <span class="hide-menu">Maps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="map-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="map-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li> -->
                        
                        <li class="nav-small-cap">--- SUPPORT</li>
                        
                        <li>
                            <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>