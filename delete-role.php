<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from role where role_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:area.php?msg=success");
		
	}
	else
	{
		header("Location:area.php?msg=failure");
	}
}
	
?>