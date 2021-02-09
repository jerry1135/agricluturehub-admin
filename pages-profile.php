<!DOCTYPE html>

<?php include ("header.php");?>
<?php
session_start();
$uid=$_SESSION['user_id'];
?>



<?php require_once("../../../config/connection.php");

$sql=//"select * from `user` u JOIN `city` c where u.city_id = c.city_id and c.city_id='".$uid."'";
"select * from `user` where user_id='".$uid."'";



     $result=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($result);
     //echo $sql;
    // $die;
?>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:19:29 GMT -->

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
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
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <style type="text/css">
                    $("#btnfile").click(function(){
                        $("#uploadfile").click();
                        });
                    </style>
<script type="text/javascript">
    function loadFile(event){
     document.getElementById('output').src=
     URL.createObjectURL(event.target.files[0]);
 };
 
</script>

                <div class="row">
                    <!-- Column -->

                    
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">

                                <button onclick="click_the_button(files);" style="background-color: white; border-style: hidden; ">
                                 <img id="output" height="50%" src="../../../image/admin/<?php echo $row["user_image"];?>" class="img-circle" width="150" /> 
                                 <form method="post">
                                    <input  type="file" id="files" name="user_image" accept="image/*" onchange="loadFile(event)" value="<?php echo $row['user_image']?>"
                                     style="display: none;"/>
                                 
                                    </button>
                               <script type="text/javascript">
                                    function click_the_button(btn){
                                        btn.click();
                                    }
                                </script>
                                    <h4 class="card-title m-t-10"><?php echo $row['user_name']?></h4>
                                    <h6 class="card-subtitle">Accoubts Manager </h6>
                                    <div class="row text-center justify-content-md-center">
                                        
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $row['email']?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $row['contact']?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $row['address'] ?> </h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                
                                
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                       
                                    </div>
                                </div>
                                <!--second tab-->
                               
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="user_name"
                                                value="<?php echo $row['user_name']?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="contact" value="<?php echo 
                                                    $row['contact']?>" class="form-control form-control-line">
                                                </div>

                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="col-sm-12">Select area</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" name="area_id">
                                                        <?php
                                $query="select * from area";
                                $re=mysqli_query($conn,$query);
                                while($r1=mysqli_fetch_array($re))
                                {
                                ?>
                                <option value='<?php echo $r1['area_id'];?>'
                                <?php if($row['area_id']==$r1['area_id'])
                                {echo "selected";}?>>
                                
                                <?php echo $r1['area_name'];?>
                                </option>
                                
                                <?php
                                }
                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" type="submit" name="update" >Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
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
   
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:19:29 GMT -->
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(isset($_POST["user_name"]) && isset($_POST["user_image"]) && isset($_POST["email"]) && isset($_POST["password"]) 
       && isset($_POST["contact"]) && isset($_POST["area_id"]))
    
        $uname=$_POST["user_name"];
        $uimg=$_POST["user_image"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $con=$_POST["contact"];
        $aid=$_POST["area_id"];

        if($uname!='' && $uimg!='' && $email!='' && $pass!='' && $con!='' && $aid!='')
        {

            $sql1 = "update user set user_name='".$uname."',user_image='".$uimg."' ,email='".$email."', 
                    password='".$pass."', contact='".$con."', area_id='".$aid."' where user_id='".$uid."'";
                   // echo $sql1;
                   // $die;
            
            $result1 =mysqli_query($conn,$sql1);
        
            echo "result = " . $result1;
            if($result1)
            {
                echo "<meta http-equiv='refresh' content= '0;url=pages-profile.php'>";
            }
        }
        else
        {
            echo "NULL VALUES";
        }
    }
 
?>
<?php include("footer.php");?>