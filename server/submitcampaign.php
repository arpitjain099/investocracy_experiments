<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $username=$_POST["username"];
  $campaigndescription=$_POST["campaigndescription"];
  $additioncomments=$_POST["additioncomments"];

$result2 = mysqli_query($link,"INSERT INTO `campaigns` VALUES('$username','$campaigndescription','$additionalcomments');");
if($result2){
echo "Data successfully submitted. Our representative will soon contact you to get more information about the campaign.";return;
}
else {
echo "Server under high load. Please try again after some time.";return;}


?>