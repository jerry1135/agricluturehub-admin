<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from subcategory where sub_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:subcategory.php?msg=success");
		
	}
	else
	{
		header("Location:subcategory.php?msg=failure");
	}
}
	
?>