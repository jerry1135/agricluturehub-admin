<?php
include("../../../config/connection.php");
$cid=$_POST['cid'];

$sql="select * from city where city_id=$cid";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result))
{
   echo"<option>" . $row['city_name'] . "</option>";
}
echo"</select>";
?>