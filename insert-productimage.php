<?php include ("header.php");?>  
<?php require_once("../../../config/connection.php");
 
$msg= "";
$msg1="";
 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
     /* if(isset($_FILES["image_path"] ) && 
       isset($_POST["product_id"]))


      {
        $file_name = $_FILES['image_path']['name'];
        $file_tmp = $_FILES['image_path']['tmp_name'];
        $file_size = $_FILES['image_path']['size'];
        $pid=$_POST["product_id"];

        if(move_uploaded_file($file_tmp,".../image/".$file_name)==1)
        {
            $query= "insert into productimage(image_path,product_id)values('".$file_name."','".$pid."')";
            mysqli_query($conn,$query);
            echo "success";
            }
            else{
                echo "error";
            } 

        }
        else
            {
                echo "error 1";
            }
      }
      else
            {
                echo "error 1";
            }
            */
       if($_POST["image_path"]=="")
	  {
	     $msg="Please Enter Image Path ";
	  } 
	  if($_POST["product_id"]=="")
	  {
	     $msg1="Please Enter Product Id";
	  }
    if(isset($_POST["image_path"] ) && 
       isset($_POST["product_id"]))
    {
        $ip=$_POST["image_path"];
        $pid=$_POST["product_id"];

        
       
        if($ip!='' && $pid!='')

        {
            $sql = "insert into productimage(image_path,product_id)values('".$ip."','".$pid."')";
			
            $result =mysqli_query($conn,$sql);
            echo "result = " . $result;


            if($result)
            {
                echo "<meta http-equiv='refresh' content= '0;url=productimage.php'>";
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
                                    <a href="indext.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Insert Product Image</li>
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
                                <h4 class="card-title">Insert Product Image</h4><br/>
                                <form class="form" method="POST" action="">
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" >Product Id</label>
                                        <div class="form-group">
                                        <select class="form-control" name="product_id">
                                           <?php
							                  $sql="select * from product";
							                  $result=mysqli_query($conn,$sql);
							                  while($row=mysqli_fetch_array($result))
							                   {
							                 ?>
							                  <option value="<?php echo $row['product_id'];?>">
							                  <?php echo $row['product_name'];?>
							                  </option>
							                  <?php
							                    }
							                  ?>
                                        </select>
										<span style="color: red"><?php echo $msg1;?></span>
                                        </div>
                                    </div>
                                     <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Image Path</label>
                                        <div class="col-10">
                                            <input class="form-control" type="file" id="example-text-input" name="image_path" accept="image/*" onchange="loadFile(event)">
                                            <img id="output" height="100"/>
											<span style="color: red"><?php echo $msg;?></span>

                                        </div>
                                    </div>
                                   
                                         <button type="submit" class="btn btn-primary">Submit</button>



                                         <script type="text/javascript">
                                             function loadFile(event){
                                                document.getElementById('output').src = 
                                                URL.createObjectURL(event.target.files[0]);
                                             };
                                         </script>
                                    
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