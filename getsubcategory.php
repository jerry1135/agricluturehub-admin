<?php
include("../../../config/connection.php");
$cid=$_POST['cid'];


$sql=//"select * from `subcategory` p JOIN `category` s where p.sub_id =$cid;
 
"select * from subcategory where category_id=$cid";

$result=mysqli_query($conn,$sql);
echo "<select>";

while($row = mysqli_fetch_array($result))
{

	

   echo"<option>"  . $row['sub_name'] . "</option>";
}
echo"</select>";
?>