<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from productimage where p_image_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:productimage.php?msg=success");
		
	}
	else
	{
		header("Location:productimage.php?msg=failure");
	}
}
	
?>