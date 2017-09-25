<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $username=$_POST["username"];
  $companyname=$_POST['companyname'];


$result = mysqli_query($con,"SELECT * FROM `bookmarkforlater` WHERE username= '$username' AND companyid= '$companyname'");
   if($result->num_rows > 0){

      echo "Company already bookmarked by user.";return;
   }

else{
$t=(string)time();
$result2 = mysqli_query($con,"INSERT INTO `bookmarkforlater` VALUES('$username','$companyname','$t');");
//echo "asa";
echo $con->query($sql1);
if ($con->query($sql1) ) {
  echo "Your bookmark request is successful. You can access your bookmarked companies in the My Profile section.";return;
} 
else {echo "Server down. Please try again later.";}


}

?>