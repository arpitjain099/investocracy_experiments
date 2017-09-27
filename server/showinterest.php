<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $username=$_POST["username"];
  $value=$_POST['value'];
  $comments=$_POST['comments'];
  $linkedin=$_POST['linkedin'];
  $companyname=$_POST['companyname'];


$result = mysqli_query($link,"SELECT * FROM `interest_fmv` WHERE username= '$username' AND companyid= '$companyname'");
   if($result->num_rows > 0){

      echo "Interest already expressed by user. Drop in a mail to reachout@fundmyventure.co if you haven't heard from us within 24 hours of first expressing your interest.";return;
   }

else{
  $sql1="INSERT INTO `interest_fmv` VALUES('$username','$value','$comments','$linkedin','$companyname',time());";
//echo time();
//echo "asa";
$t=(string)time();
$result2 = mysqli_query($link,"INSERT INTO `interest_fmv` VALUES('$username','$value','$comments','$linkedin','$companyname','$t');");
//echo "asa";
echo $link->query($sql1);
if ($link->query($sql1) ) {
  echo "You have successfully requested access to Confidential Documents. The company will contact you if your request gets approved. ";return;
} 
else {echo "Server down. Please try again later.";}


}

?>