<?php 
header('Access-Control-Allow-Origin: *');

require 'vendor/autoload.php';

use Mailgun\Mailgun;
$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $modalemail=$_POST["modalemail"];
  $modalcontactnumber=$_POST['modalcontactnumber'];
 



$result2 = mysqli_query($con,"INSERT INTO `modalventuresignup` VALUES('$modalemail','$modalcontactnumber');");
if($result2){
echo "ok";
//return;
}
else {
echo "not ok";
//return;
}


?>