<!DOCTYPE html>
<html lang="en">

<?php include ("header.php");?>
<?php  
require_once("../../../config/connection.php");

$users = "SELECT count(*) as total_users FROM `user`";
$result = mysqli_query($conn,$users);
$row = mysqli_fetch_array($result);
$user_count = $row['total_users'];

$products = "SELECT count(*) as total_products FROM `product`";
$result1 = mysqli_query($conn,$products);
$row1 = mysqli_fetch_array($result1);
$product_count = $row1['total_products'];

$orders = "SELECT count(*) as total_orders FROM `order`";
$result2 = mysqli_query($conn,$orders);
$row2 = mysqli_fetch_array($result2);
$order_count = $row2['total_orders'];

$servicepackages = "SELECT count(*) as total_servicepackages FROM `servicepackage`";
$result4 = mysqli_query($conn,$servicepackages);
$row4 = mysqli_fetch_array($result4);
$servicepackage_count = $row4['total_servicepackages'];

$servicebookings = "SELECT count(*) as total_servicebookings FROM `servicebooking`";
$result5 = mysqli_query($conn,$servicebookings);
$row5 = mysqli_fetch_array($result5);
$servicebooking_count = $row5['total_servicebookings'];

$feedback = "SELECT count(*) as total_feedback FROM `feedback`";
$result3 = mysqli_query($conn,$feedback);
$row3 = mysqli_fetch_array($result3);
$feedback_count = $row3['total_feedback'];

?>
<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:16:46 GMT -->


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   
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
                        <h4 class="text-themecolor">Index</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Index</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
							    <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-screen-desktop"></i></h3>
                                            <p class="text-muted">TOTAL USER</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?php echo $user_count;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                             <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">TOTAL PRODUCT</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?php echo $product_count;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
											<h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted"> TOTAL ORDER</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple"><?php echo $order_count;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>	
                    <!-- Column -->
                    <!-- Column -->
				<div class="card-group">
                    <!-- Column -->
                    <!-- Column -->
					<div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                             <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">TOTAL SERVICEPACKAGE</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?php echo $servicepackage_count;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
											<h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted"> TOTAL servicebooking</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple"><?php echo $servicebooking_count;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- Column -->
                    <!-- Column -->
					<div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
										    <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">TOTAL FEEDBACK</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?php echo $feedback_count;?></h2>
                                        </div>
                                    </div>
                                </div>
								<div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 8px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Comment widgets -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Order Overview</h5>
                                        <h6 class="card-subtitle">Check the monthly sales </h6>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="form-control b-0">
                                            <option>January</option>
                                            <option value="1">February</option>
                                            <option value="2" selected="">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>year 2020</h3>
                                        <h5 class="font-light m-t-0">Order for this year</h5>
									</div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                      
									</div>
								</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>PRICE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                 $sql = "select *from `order` o join `user` u where o.user_id=u.user_id and o.order_status='0' ";
                 $result = mysqli_query($conn,$sql);
                // echo $sql;
                 //$die;
                 while ($row = mysqli_fetch_array($result))
                  {
                     # code...
                    $oid = $row ['order_id'];
                    $uid = $row ['user_id'];
               ?>  
              
                                        <tr>
                                            <td class="text-center"><?php echo $row['order_id']?></td>
                                            <td class="txt-oflo"><?php echo $row['user_name']?></td>
                                            <td><span class="badge badge-success badge-pill">
                                                <?php 
                                                if ($row['order_status']==0)
                                                    {
                                                          echo "pending";
                                                    }
                                                 else if ($row['order_status']==1)
                                                    {
                                                          echo "Accepted";
                                                    }
                                                 else if ($row['order_status']==2)
                                                    {
                                                          echo "Rejected";
                                                    }
                                                ?>
                                                </span> </td>
                                            <td class="txt-oflo"><?php echo $row['order_date']?></td>
                                            <td><span class="text-success"><?php echo $row['amount']?>
                                                </span></td>
                                            <td><a style="color: #18F70D;cursor: pointer" href="order_accept1.php?id=<?php echo $oid;?>">ACCEPT</a> &nbsp
                                                <a style="color: red ;cursor: pointer" href="order_reject1.php?id=<?php echo $oid;?>">REJECT</a> </td>    
                                        </tr>
                                         <?php
                                           }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">ServiceBooking Overview</h5>
                                        <h6 class="card-subtitle">Check the monthly booking </h6>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="form-control b-0">
                                            <option>January</option>
                                            <option value="1">February</option>
                                            <option value="2" selected="">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>year 2020</h3>
                                        <h5 class="font-light m-t-0">Booking for this year</h5>
									</div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                       
										
									
									</div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>PRICE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                 $sql = "select *from `servicebooking` o join `user` u where o.user_id=u.user_id and o.booking_status='0'";
                 $result = mysqli_query($conn,$sql);
                 while ($row = mysqli_fetch_array($result))
                  {
                     # code...
                    $oid = $row ['s_booking_id'];
                    $uid = $row ['user_id'];
               ?>  
              
                                        <tr>
                                            <td class="text-center"><?php echo $row['s_booking_id']?></td>
                                            <td class="txt-oflo"><?php echo $row['user_name']?></td>
                                            <td><span class="badge badge-success badge-pill">
                                                <?php 
                                                if ($row['booking_status']==0)
                                                    {
                                                          echo "pending";
                                                    }
                                                 else if ($row['booking_status']==1)
                                                    {
                                                          echo "Accepted";
                                                    }
                                                 else if ($row['booking_status']==2)
                                                    {
                                                          echo "Rejected";
                                                    }
                                                ?>
                                                </span> </td>
                                            <td class="txt-oflo"><?php echo $row['s_booking_date']?></td>
                                            <td><span class="text-success"><?php echo $row['price']?>
                                                </span></td>
                                            <td><a style="color: #18F70D;cursor: pointer" href="servicebooking_accept1.php?id=<?php echo $oid;?>">ACCEPT</a> &nbsp
                                                <a style="color: red ;cursor: pointer" href="servicebooking_reject1.php?id=<?php echo $oid;?>">REJECT</a> </td>    
                                        </tr>
                                         <?php
                                          }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                            <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Todo, chat, notification -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
 
<?php include("footer.php"); ?>
<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 05:16:59 GMT -->
</html>
