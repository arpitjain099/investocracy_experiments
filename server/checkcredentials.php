<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $email=$_POST["email"];
  $password=$_POST['password'];
//echo "$email";
//$email=md5($email);
$result = mysqli_query($con,"SELECT * FROM `users_fmv` WHERE email = '$email' AND password='$password'");
   if($result->num_rows > 0){
      echo "investor";return;
   }

else{
echo "failed";return;
}

?>