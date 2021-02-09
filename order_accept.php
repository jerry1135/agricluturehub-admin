<?php
session_start();
require_once("../../../config/connection.php");

if(isset($_GET['id']))
{
	//$uid=$_GET['uid'];
     $id=$_GET["id"];


     $sql="update `order` set order_status='1' where order_id='".$id."'";


     $result=mysqli_query($conn,$sql);
     /*echo $sql;
     $die;*/

     if($result)

     {
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
$mail="select * from `order` o join user u where o.user_id=u.user_id and o.order_id='".$id."'";
$result4=mysqli_query($conn,$mail);
$row1=mysqli_fetch_array($result4);

if($result)
{
             $email=$row1['email'];
               $sql5 = "select * from user where email = '".$email."'";
               
               
               $result = mysqli_query($conn,$sql5);
              // echo $sql5;
             //  $die;
               
               
                    if($result)
                    {
                         $product=$row1['amount'];

                         $message = "<h3>Your order &#8377; '".$product."' is accepted. waiting for delivery. Thank You :) </h3>";
                         $subject = " Agricluture Hub Order details";
                         $mailSent = send_mail($email, $message, $subject);
                         if($mailSent)
                         {
                             

                              $_SESSION['id'] =$email;
                              
                         }
                         else
                         {
                         echo "mail not send";
                         }
                         
                         
                   }
              }

     	echo"<meta http-equiv='refresh' content='3; url=index.php'>";
     }
}
     else
	 {
	    echo "value not set";
	 }
?>