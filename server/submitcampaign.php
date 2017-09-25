<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $username=$_POST["username"];
  $campaigndescription=$_POST["campaigndescription"];
  $additioncomments=$_POST["additioncomments"];

$result2 = mysqli_query($con,"INSERT INTO `campaigns` VALUES('$username','$campaigndescription','$additionalcomments');");
if($result2){
echo "Data successfully submitted. Our representative will soon contact you to get more information about the campaign.";return;
}
else {
echo "Server under high load. Please try again after some time.";return;}


?>