<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from servicepackage where s_package_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:servicepackage.php?msg=success");
		
	}
	else
	{
		header("Location:servicepackage.php?msg=failure");
	}
}
	
?>