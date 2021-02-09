<?php include ("header.php");?>  
<?php require_once("../../../config/connection.php");
 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    $sql1 = "select * from product where product_id = $id";
    //echo $sql;
    //$die;
    $result1  = mysqli_query($conn,$sql1);
    
    $row1 = mysqli_fetch_array($result1);
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
                        <h4 class="text-themecolor">Update Table</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Update Product</li>
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
                                <h4 class="card-title">Update Product</h4><br/>
                                <form class="form" method="POST" action="">
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" >Sub Category Name</label>
                                        <div class="form-group">
                                        <select class="form-control" name="sub_id">
                                           <?php
                                              $sql="select * from subcategory";
                                              $result=mysqli_query($conn,$sql);
                                              while($row=mysqli_fetch_array($result))
                                               {
                                             ?>
                                              <option value="<?php echo $row['sub_id'];?>">
                                              <?php echo $row['sub_name'];?>
                                              </option>
                                              <?php
                                                }
                                              ?>
                                        </select>   
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Product Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="id" id="example-text-input" name="product_name" value="<?php echo $row1['product_name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" >Product Desc</label>
                                        <div class="col-10">
                                            <textarea rows="5" class="form-control" type="search" id="example-search-input" name="product_desc" ><?php echo $row1['product_desc'];?></textarea>
                                        </div>
                                    </div>
									<div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Product Price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="id" id="example-text-input" name="product_price" value="<?php echo $row1['product_price']?>">
                                        </div>
                                    </div>
									<div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Product Quantity</label>
                                        <div class="col-10">
                                            <input class="form-control" type="id" id="example-text-input" name="p_quantity" value="<?php echo $row1['p_quantity']?>" >
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
		
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(isset($_POST["product_name"]) && isset($_POST["product_desc"]) && isset($_POST["product_price"]) && isset($_POST["p_quantity"]) && isset($_POST["sub_id"]))
    {
        $pname=$_POST["product_name"];
        $pdesc=$_POST["product_desc"];
		$pri=$_POST["product_price"];
        $pq=$_POST["p_quantity"];
        $sid=$_POST["sub_id"];
        if($pname!='' && $pdesc!='' && $pri!='' && $pq!='' && $sid!='')
        {
            $sql = "update product set product_name='".$pname."',product_desc='".$pdesc."',product_price='".$pri."',p_quantity='".$pq."',sub_id='".$sid."' where product_id=$id";
			
            $result =mysqli_query($conn,$sql);
            echo "result = " . $result;
            if($result)
            {
                echo "<meta http-equiv='refresh' content= '0;url=product.php'>";
            }
        }
        else
        {
            echo "NULL VALUES";
        }
    }
 }
?>