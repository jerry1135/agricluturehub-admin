<?php

require_once("../../../config/connection.php");

if(isset ($_GET['id']))
{
	
	$id = $_GET['id'];
	$sql = "delete from city where city_id = $id";
	$result  = mysqli_Query($conn,$sql);
	
	if($result)
	{
		
		header("Location:city.php?msg=success");
		
	}
	else
	{
		header("Location:city.php?msg=failure");
	}
}
	
?>