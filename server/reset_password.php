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


  $email=$_POST["email"];
//$newpassword=md5(time().$email);

//$sql = "UPDATE `users_fmv` SET password='$newpassword' WHERE email='$email'";
$result = mysqli_query($con,"SELECT * FROM `users_fmv` WHERE email = '$email'");
   if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        
        echo "ok";

# Instantiate the client.
$mgClient = new Mailgun('key-be2572550e87f8d51773e22bed980aa8');
$domain = "fundmyventure.co";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Arpit from FundMyVenture <reachout@fundmyventure.co>',
    'to'      => $email,
    'subject' => 'Password Recovery Request',
    'text'    => 'Hello world!',
    'html'    => 'Hey there!<br><br> We received a password recovery request for your mail address. Your password is  '. '"'.$row["password"].'"'."<br><br>Cheers!Team <a href='http://fundmyventure.co'>FundMyVenture</a>"
));

 return;
    }
   }




   
?>