<?php 
header('Access-Control-Allow-Origin: *');

require 'vendor/autoload.php';

use Mailgun\Mailgun;
include('config.php');

  $modalemail=$_POST["modalemail"];
  $modalcontactnumber=$_POST['modalcontactnumber'];
 



$result2 = mysqli_query($link,"INSERT INTO `modalventuresignup` VALUES('$modalemail','$modalcontactnumber');");
if($result2){
echo "ok";
//return;
}
else {
echo "not ok";
//return;
}


?>