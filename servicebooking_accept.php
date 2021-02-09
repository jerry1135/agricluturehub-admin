<?php
session_start();
require_once("../../../config/connection.php");

if(isset($_GET['id']))
{
	//$uid=$_GET['uid'];
     $id=$_GET["id"];


     $sql="update `servicebooking` set booking_status='1' where s_booking_id='".$id."'";


     $result=mysqli_query($conn,$sql);
     /*echo $sql;
     $die;*/

     if($result)
     {
     	echo"<meta http-equiv='refresh' content='3; url=servicebooking.php'>";
     }
}
     else
	 {
	    echo "value not set";
	 }
?>