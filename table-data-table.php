<!DOCTYPE html>
<html lang="en">


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
            <p class="loader__label">Elite admin</p>
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
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
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
                            <img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave
                                Gection
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.html" class="dropdown-item">
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
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Dashboard
                                    <span class="badge badge-pill badge-cyan ml-auto">4</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="index.html">Minimal </a>
                                </li>
                                <li>
                                    <a href="index2.html">Analytical</a>
                                </li>
                                <li>
                                    <a href="index3.html">Demographical</a>
                                </li>
                                <li>
                                    <a href="index4.html">Modern</a>
                                </li>
                            </ul>
                        </li>
                        <li>
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
                                    <a href="app-chat.html">Chat app</a>
                                </li>
                                <li>
                                    <a href="app-ticket.html">Support Ticket</a>
                                </li>
                                <li>
                                    <a href="app-contact.html">Contact / Employee</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">Contact Grid</a>
                                </li>
                                <li>
                                    <a href="app-contact-detail.html">Contact Detail</a>
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
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-palette"></i>
                                <span class="hide-menu">Ui Elements
                                    <span class="badge badge-pill badge-primary text-white ml-auto">25</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-user-card.html">User Cards</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-tab.html">Tab</a>
                                </li>
                                <li>
                                    <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                                </li>
                                <li>
                                    <a href="ui-tooltip-stylish.html">Tooltip stylish</a>
                                </li>
                                <li>
                                    <a href="ui-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li>
                                    <a href="ui-notification.html">Notification</a>
                                </li>
                                <li>
                                    <a href="ui-progressbar.html">Progressbar</a>
                                </li>
                                <li>
                                    <a href="ui-nestable.html">Nestable</a>
                                </li>
                                <li>
                                    <a href="ui-range-slider.html">Range slider</a>
                                </li>
                                <li>
                                    <a href="ui-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="ui-horizontal-timeline.html">Horizontal Timeline</a>
                                </li>
                                <li>
                                    <a href="ui-session-timeout.html">Session Timeout</a>
                                </li>
                                <li>
                                    <a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a>
                                </li>
                                <li>
                                    <a href="ui-bootstrap.html">Bootstrap Ui</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-bootstrap-switch.html">Bootstrap Switch</a>
                                </li>
                                <li>
                                    <a href="ui-list-media.html">List Media</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-date-paginator.html">Date-paginator</a>
                                </li>
                                <li>
                                    <a href="ui-dragable-portlet.html">Dragable Portlet</a>
                                </li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="form-basic.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="form-layout.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-addons.html">Form Addons</a>
                                </li>
                                <li>
                                    <a href="form-material.html">Form Material</a>
                                </li>
                                <li>
                                    <a href="form-float-input.html">Floating Lable</a>
                                </li>
                                <li>
                                    <a href="form-pickers.html">Form Pickers</a>
                                </li>
                                <li>
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
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="table-layout.html">Table Layouts</a>
                                </li>
                                <li>
                                    <a href="table-data-table.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="table-footable.html">Footable</a>
                                </li>
                                <li>
                                    <a href="table-jsgrid.html">Js Grid Table</a>
                                </li>
                                <li>
                                    <a href="table-responsive.html">Responsive Table</a>
                                </li>
                                <li>
                                    <a href="table-bootstrap.html">Bootstrap Tables</a>
                                </li>
                                <li>
                                    <a href="table-editable-table.html">Editable Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-settings"></i>
                                <span class="hide-menu">Widgets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="widget-data.html">Data Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-apps.html">Apps Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-charts.html">Charts Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-gallery"></i>
                                <span class="hide-menu">Page Layout</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="layout-single-column.html">1 Column</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header.html">Fix header</a>
                                </li>
                                <li>
                                    <a href="layout-fix-sidebar.html">Fix sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html">Boxed Layout</a>
                                </li>
                                <li>
                                    <a href="layout-logo-center.html">Logo in Center</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-files"></i>
                                <span class="hide-menu">Sample Pages
                                    <span class="badge badge-pill badge-info">25</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="starter-kit.html">Starter Kit</a>
                                </li>
                                <li>
                                    <a href="pages-blank.html">Blank page</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Authentication
                                        <span class="badge badge-pill badge-success pull-right">6</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-login.html">Login 1</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register3.html">Register 3</a>
                                        </li>
                                        <li>
                                            <a href="pages-lockscreen.html">Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="pages-recover-password.html">Recover password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile page</a>
                                </li>
                                <li>
                                    <a href="pages-animation.html">Animation</a>
                                </li>
                                <li>
                                    <a href="pages-fix-innersidebar.html">Sticky Left sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-treeview.html">Treeview</a>
                                </li>
                                <li>
                                    <a href="pages-utility-classes.html">Helper Classes</a>
                                </li>
                                <li>
                                    <a href="pages-search-result.html">Search result</a>
                                </li>
                                <li>
                                    <a href="pages-scroll.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-lightbox-popup.html">Lighbox popup</a>
                                </li>
                                <li>
                                    <a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-error-400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-503.html">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-pie-chart"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="chart-morris.html">Morris Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chartist.html">Chartis Chart</a>
                                </li>
                                <li>
                                    <a href="chart-echart.html">Echarts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Chart</a>
                                </li>
                                <li>
                                    <a href="chart-knob.html">Knob Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chart-js.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="chart-sparkline.html">Sparkline Chart</a>
                                </li>
                                <li>
                                    <a href="chart-extra-chart.html">Extra chart</a>
                                </li>
                                <li>
                                    <a href="chart-peity.html">Peity Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-light-bulb"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                                <li><a href="icon-iconmind.html">Mind Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
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
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-align-left"></i>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="javascript:void(0)">item 1.1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.2</a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.4</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- SUPPORT</li>
                        <li>
                            <a class="waves-effect waves-dark" href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html"
                                aria-expanded="false">
                                <i class="far fa-circle text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
                                <i class="far fa-circle text-info"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Datatable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Datatable</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15">
                                <i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Row grouping </h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- table responsive -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Responsive </h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-striped no-wrap">
                                        <thead>
                                            <tr>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Extn.</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>5421</td>
                                                <td>t.nixon@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett</td>
                                                <td>Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>8422</td>
                                                <td>g.winters@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>1562</td>
                                                <td>a.cox@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>6224</td>
                                                <td>c.kelly@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>5407</td>
                                                <td>a.satou@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle</td>
                                                <td>Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>4804</td>
                                                <td>b.williamson@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod</td>
                                                <td>Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                                <td>9608</td>
                                                <td>h.chandler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona</td>
                                                <td>Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                                <td>6200</td>
                                                <td>r.davidson@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen</td>
                                                <td>Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                                <td>2360</td>
                                                <td>c.hurst@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya</td>
                                                <td>Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                                <td>1667</td>
                                                <td>s.frost@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jena</td>
                                                <td>Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                                <td>3814</td>
                                                <td>j.gaines@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn</td>
                                                <td>Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                                <td>9497</td>
                                                <td>q.flynn@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Charde</td>
                                                <td>Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                                <td>6741</td>
                                                <td>c.marshall@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Haley</td>
                                                <td>Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                                <td>3597</td>
                                                <td>h.kennedy@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana</td>
                                                <td>Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                                <td>1965</td>
                                                <td>t.fitzpatrick@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                                <td>1581</td>
                                                <td>m.silva@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Paul</td>
                                                <td>Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                                <td>3059</td>
                                                <td>p.byrd@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria</td>
                                                <td>Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                                <td>1721</td>
                                                <td>g.little@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley</td>
                                                <td>Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                                <td>2558</td>
                                                <td>b.greer@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Dai</td>
                                                <td>Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                                <td>2290</td>
                                                <td>d.rios@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette</td>
                                                <td>Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                                <td>1937</td>
                                                <td>j.caldwell@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri</td>
                                                <td>Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                                <td>6154</td>
                                                <td>y.berry@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar</td>
                                                <td>Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                                <td>8330</td>
                                                <td>c.vance@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Doris</td>
                                                <td>Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                                <td>3023</td>
                                                <td>d.wilder@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica</td>
                                                <td>Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                                <td>5797</td>
                                                <td>a.ramos@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                                <td>8822</td>
                                                <td>g.joyce@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                                <td>9239</td>
                                                <td>j.chang@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden</td>
                                                <td>Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                                <td>1314</td>
                                                <td>b.wagner@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona</td>
                                                <td>Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                                <td>2947</td>
                                                <td>f.green@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Shou</td>
                                                <td>Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                                <td>8899</td>
                                                <td>s.itou@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle</td>
                                                <td>House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                                <td>2769</td>
                                                <td>m.house@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Suki</td>
                                                <td>Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                                <td>6832</td>
                                                <td>s.burks@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott</td>
                                                <td>Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                                <td>3606</td>
                                                <td>p.bartlett@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                                <td>2860</td>
                                                <td>g.cortez@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Martena</td>
                                                <td>Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                                <td>8240</td>
                                                <td>m.mccray@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Unity</td>
                                                <td>Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                                <td>5384</td>
                                                <td>u.butler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Howard</td>
                                                <td>Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                                <td>7031</td>
                                                <td>h.hatfield@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Hope</td>
                                                <td>Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                                <td>6318</td>
                                                <td>h.fuentes@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian</td>
                                                <td>Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                                <td>9422</td>
                                                <td>v.harrell@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy</td>
                                                <td>Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                                <td>7580</td>
                                                <td>t.mooney@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson</td>
                                                <td>Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                                <td>1042</td>
                                                <td>j.bradshaw@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia</td>
                                                <td>Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                                <td>2120</td>
                                                <td>o.liang@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno</td>
                                                <td>Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                                <td>6222</td>
                                                <td>b.nash@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura</td>
                                                <td>Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                                <td>9383</td>
                                                <td>s.yamamoto@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Thor</td>
                                                <td>Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                                <td>8327</td>
                                                <td>t.walton@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Finn</td>
                                                <td>Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                                <td>2927</td>
                                                <td>f.camacho@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Serge</td>
                                                <td>Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                                <td>8352</td>
                                                <td>s.baldwin@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida</td>
                                                <td>Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                                <td>7439</td>
                                                <td>z.frank@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita</td>
                                                <td>Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                                <td>4389</td>
                                                <td>z.serrano@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                                <td>3431</td>
                                                <td>j.acosta@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Cara</td>
                                                <td>Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                                <td>3990</td>
                                                <td>c.stevens@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione</td>
                                                <td>Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td>1016</td>
                                                <td>h.butler@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Lael</td>
                                                <td>Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                                <td>6733</td>
                                                <td>l.greer@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas</td>
                                                <td>Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                                <td>8196</td>
                                                <td>j.alexander@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Shad</td>
                                                <td>Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                                <td>6373</td>
                                                <td>s.decker@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                                <td>5384</td>
                                                <td>m.bruce@datatables.net</td>
                                            </tr>
                                            <tr>
                                                <td>Donna</td>
                                                <td>Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                <td>4226</td>
                                                <td>d.snider@datatables.net</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel
                            <span>
                                <i class="ti-close right-side-toggle"></i>
                            </span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li>
                                    <b>With Light sidebar</b>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-default"
                                        class="default-theme working">1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a>
                                </li>
                                <li class="d-block m-t-30">
                                    <b>With Dark sidebar</b>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-default-dark"
                                        class="default-dark-theme ">7</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-green-dark"
                                        class="green-dark-theme">8</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-blue-dark"
                                        class="blue-dark-theme">10</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-purple-dark"
                                        class="purple-dark-theme">11</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-megna-dark"
                                        class="megna-dark-theme ">12</a>
                                </li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li>
                                    <b>Chat option</b>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle">
                                        <span>Varun Dhavan
                                            <small class="text-success">online</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle">
                                        <span>Genelia Deshmukh
                                            <small class="text-warning">Away</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle">
                                        <span>Ritesh Deshmukh
                                            <small class="text-danger">Busy</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle">
                                        <span>Arijit Sinh
                                            <small class="text-muted">Offline</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle">
                                        <span>Govinda Star
                                            <small class="text-success">online</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle">
                                        <span>John Abraham
                                            <small class="text-success">online</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle">
                                        <span>Hritik Roshan
                                            <small class="text-success">online</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle">
                                        <span>Pwandeep rajan
                                            <small class="text-success">online</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:16:30 GMT -->
</html>