<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $email=$_POST["email"];
  $password=$_POST['password'];
//echo "$email";
//$email=md5($email);
$result = mysqli_query($link,"SELECT userid FROM `users_fmv` WHERE email = '$email' AND password='$password'");

   if($result->num_rows > 0){
   		while($row = $result->fetch_assoc()) {
        echo $row["userid"];
        break;
    }
   }

else{
echo "404";return;
}
?>