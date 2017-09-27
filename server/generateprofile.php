<?php 
header('Access-Control-Allow-Origin: *');

include('config.php');

  $username=$_POST["username"];


$result = mysqli_query($link,"SELECT * FROM `users_fmv` WHERE email= '$username'");
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