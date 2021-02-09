<?php
session_start();
require_once("../../../config/connection.php");

if(isset($_GET['id']))
{
	//$uid=$_GET['uid'];
     $id=$_GET["id"];


     $sql="update `servicebooking` set booking_status='2' where s_booking_id ='".$id."'";


     $result=mysqli_query($conn,$sql);
     $s="select * from servicebooking b join servicepackage s where b.s_package_id = s.s_package_id AND b.s_booking_id='".$id."'  ";
     $r=mysqli_query($conn,$s);

     /*echo $sql;
     $die;*/
	 require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
$mail="select * from `servicebooking` o join user u where o.user_id=u.user_id and s_booking_id='".$id."'";
$result4=mysqli_query($conn,$mail);
$row1=mysqli_fetch_array($result4);
$row2=mysqli_fetch_array($r);
if($result)
{
             $email=$row1['email'];
               $sql5 = "select * from user where email = '".$email."'";
               
               
               $result = mysqli_query($conn,$sql5);
              // echo $sql5;
             //  $die;
               
               
                    if($result)
                    {
                         $p=$row1['price'];
                         $name=$row2['s_package_name'];

                         $message = "<h3>Your Service Booking '".$name."' &#8377; '".$p."' is Rejected. Book Service Package again :) </h3>";
                         $subject = " Agricluture Hub Booking details";
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
    }

     if($result)
     {
     	echo"<meta http-equiv='refresh' content='3; url=index.php'>";
     }

?>