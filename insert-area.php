<?php include ("header.php");?>  
<?php require_once("../../../config/connection.php");
 
$msg= "";
$msg1="";
$msg2="";

 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(isset($_POST["area_name"]) && isset($_POST["area_pincode"]) && isset($_POST["city_id"]))
    {
	if($_POST["area_name"]=="")
	  {
	     $msg="Please Enter Area Name ";
	  } 
	  if($_POST["ares_pincode"]=="")
	  {
	     $msg1="Please Enter Area Pincode";
	  }
	  if($_POST["city_id"]=="")
	  {
	     $msg2="Please Enter Category Id";
	  }
        $aname=$_POST["area_name"];
        $pin=$_POST["area_pincode"];
        $cid=$_POST["city_id"];
        if($aname!='' && $pin!='' && $cid!='')
        {
            $sql = "insert into area(area_name,area_pincode,city_id)values('".$aname."','".$pin."','".$cid."')";
			
            $result =mysqli_query($conn,$sql);
            echo "result = " . $result;
            if($result)
            {
                echo "<meta http-equiv='refresh' content= '0;url=area.php'>";
            }
        }
        else
        {
            echo "NULL VALUES";
        }
    }
 }

 ?>
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
                        <h4 class="text-themecolor">Insert Table</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Insert Area</li>
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
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                       
                    </div>
                </div>
                <!-- Row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Insert Area</h4><br/>
                                <form class="form" method="POST" action="">
                                     <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" >City Name</label>
                                        <div class="form-group">
                                        <select class="form-control" name="city_id">
                                             <?php
                                                $sql="select * from city";
                                                $result=mysqli_query($conn,$sql);
                                                while($row=mysqli_fetch_array($result))
                                                {
                                             ?>
                                              <option value="<?php echo $row['city_id'];?>">
                                                <?php echo $row['city_name'];?>
                                              </option>
                                              <?php
                                                }
                                              ?>
                                        </select>
										<span style="color: red"><?php echo $msg2;?></span>
                                        </div>
                                            
                                    </div>
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Area Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="id" id="example-text-input" name="area_name">
											<span style="color: red"><?php echo $msg;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" >Area Pincode</label>
                                        <div class="col-10">
                                            <input class="form-control" type="search" id="example-search-input" name="area_pincode">
											<span style="color: red"><?php echo $msg1;?></span>
                                        </div>
                                    </div>
                                   
                                    
                                         <button type="submit" class="btn btn-primary">Submit</button>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
               
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
                                    <a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a>
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
                                    <a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
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
            </div>
        </div>
<?php include("footer.php");?>