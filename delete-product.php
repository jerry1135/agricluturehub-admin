<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from product where product_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:product.php?msg=success");
		
	}
	else
	{
		header("Location:product.php?msg=failure");
	}
}
	
?>