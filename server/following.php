<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $username=$_POST["username"];
$arr=array();

  $result = mysqli_query($link,"SELECT * FROM `interest_fmv` WHERE username= '$username'");
   if($result->num_rows > 0)
   {
     while($row = $result->fetch_assoc()) {
     	$t=$row['companyid'];
		$result2 = mysqli_query($link,"SELECT * FROM `companies` WHERE companyid= '$t'");
		if($result2->num_rows > 0)
		{
	     	while($row2 = $result2->fetch_assoc()) 
	     	{
		  		if (!in_array($row2, $arr)) 
		  		{
		    	array_push ($arr,$row2);
				}
	     	}
 		}

     }
   }
$result = mysqli_query($link,"SELECT * FROM `bookmarkforlater` WHERE username= '$username'");
   if($result->num_rows > 0)
   {
     while($row = $result->fetch_assoc()) {

     	$t=$row['companyid'];
		$result2 = mysqli_query($link,"SELECT * FROM `companies` WHERE companyid= '$t'");
		if($result2->num_rows > 0)
		{
	     	while($row2 = $result2->fetch_assoc()) 
	     	{
		  		if (!in_array($row2, $arr)) 
		  		{
		    	array_push ($arr,$row2);
				}
	     	}
 		}

     }
   }

else{
  echo "user not found";


}
echo json_encode($arr);
?>