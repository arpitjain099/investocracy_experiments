<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $username=$_POST["username"];


$result = mysqli_query($con,"SELECT * FROM `users_fmv` WHERE email= '$username'");
   if($result->num_rows > 0){
     while($row = $result->fetch_assoc()) {
       $jsonData[] = $row;
       echo json_encode($jsonData);
     }
     
   }

else{
  echo "user not found";


}

?>