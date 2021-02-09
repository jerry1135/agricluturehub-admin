<?php include ("header.php");?>
<?php require_once("../../../config/connection.php");?>
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
                                <h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Payment Date</th>
												<th>Amount</th>
												
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
$sql = "select * from `payment` p JOIN `order` o JOIN `servicebooking` s where p.order_id = o.order_id and p.s_booking_id=s.s_booking_id";
$result = mysqli_query($conn,$sql);
while($row = Mysqli_fetch_array($result))
{
    $id = $row ['pay_id'];
 ?>
                                             <tr>
                                                <td><?php echo $row['pay_date_time']?></td>
												<td><?php echo $row['amount']?></td>
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
            </div>
        </div>
<?php include("footer.php");?>