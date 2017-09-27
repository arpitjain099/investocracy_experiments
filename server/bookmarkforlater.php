<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $username=$_POST["username"];
  $companyname=$_POST['companyname'];


$result = mysqli_query($link,"SELECT * FROM `bookmarkforlater` WHERE username= '$username' AND companyid= '$companyname'");
   if($result->num_rows > 0){

      echo "Company already bookmarked by user.";return;
   }

else{
$t=(string)time();
$result2 = mysqli_query($link,"INSERT INTO `bookmarkforlater` VALUES('$username','$companyname','$t');");
//echo "asa";
echo $link->query($sql1);
if ($link->query($sql1) ) {
  echo "Your bookmark request is successful. You can access your bookmarked companies in the My Profile section.";return;
} 
else {echo "Server down. Please try again later.";}


}

?>