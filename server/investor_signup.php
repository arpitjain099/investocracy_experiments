<?php

require 'vendor/autoload.php';

//use Mailgun\Mailgun;
include('config.php');

  $name=$_POST["name"];
  $entity=$_POST['entity'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $linkedin=$_POST['linkedin'];
  $headline='Angel Investor';
  $location='Not Available';
  $preferences='yes';
  $countryofresidence='India';
  $industry_preferences=$_POST['industrypreferences'];
  $pastinvestments='no';
  $currentorganization="";
  $designation="";
  $investor_type="Angel";
  $twitter="Not Available";
  $typicalinvestmentamount="Not Available";
  $portofolio="Not Available";
  $image_url="http://fundmyventure.co/assets/images/investor_profile.png";
  $time = time();
  if($linkedin=="")
    $linkedin= "Not Available";
  if($currentorganization=="")
    $currentorganization= "Not Available";
  if($designation=="")
    $designation= "Not Available";
$result = mysqli_query($link,"SELECT * FROM `users_fmv` WHERE email = '$email'");

   if($result->num_rows > 0){
      echo "user already exists";
      return;
   }

else{
$result2 = mysqli_query($link,"INSERT INTO `users_fmv` VALUES('$name','$password','$entity','$email','$linkedin','$phone','$headline','$location','$preferences','$pastinvestments','$industry_preferences','$countryofresidence','$currentorganization','$designation','pending','$investor_type','$twitter','$typicalinvestmentamount','$portofolio','$image_url','$time');");
if($result2){
echo "200";
}
else {
echo "404";
}
}

/*
$mgClient = new Mailgun('key-be2572550e87f8d51773e22bed980aa8');
$domain = "fundmyventure.co";

$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Arpit from FundMyVenture <reachout@fundmyventure.co>',
    'to'      => $email,
    'subject' => 'Welcome!',
    'text'    => 'Hello world!',
    'html'    => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta charset="utf-8"> <!-- utf-8 works for most cases --> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine --> <title></title> <!-- CSS Reset --> <style type="text/css"> html, body { Margin: 0 !important; padding: 0 !important; height: 100% !important; width: 100% !important; }  * { -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }  div[style*="margin: 16px 0"] { margin:0 !important; }  table, td { mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important; } table { border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; Margin: 0 auto !important; } table table table { table-layout: auto; }  img { -ms-interpolation-mode:bicubic; } .yshortcuts a { border-bottom: none !important; }  .mobile-link--footer a, a[x-apple-data-detectors] { color:inherit !important; text-decoration: underline !important; } </style> <!-- Progressive Enhancements --> <style>  .button-td, .button-a { transition: all 100ms ease-in; } .button-td:hover, .button-a:hover { background: #555555 !important; border-color: #555555 !important; }  @media screen and (max-width: 600px) { .email-container { width: 100% !important; }  .fluid, .fluid-centered { max-width: 100% !important; height: auto !important; Margin-left: auto !important; Margin-right: auto !important; }  .fluid-centered { Margin-left: auto !important; Margin-right: auto !important; }  .stack-column, .stack-column-center { display: block !important; width: 100% !important; max-width: 100% !important; direction: ltr !important; }  .stack-column-center { text-align: center !important; }  .center-on-narrow { text-align: center !important; display: block !important; Margin-left: auto !important; Margin-right: auto !important; float: none !important; } table.center-on-narrow { display: inline-block !important; } } </style> </head> <body bgcolor="#222222" width="100%" style="Margin: 0;"> <table bgcolor="#222222" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;"><tr><td valign="top"> <center style="width: 100%;"> <!-- Visually Hidden Preheader Text : BEGIN --> <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> Welcome to FundMyVenture! </div> <!-- Visually Hidden Preheader Text : END --> <!-- Email Header : BEGIN --> <table align="center" width="600" class="email-container"> <tr> <td style="padding: 20px 0; text-align: center"> <img src="http://fundmyventure.co/assets/images/fmv.png" width="100" height="100" alt="alt_text" border="0"> </td> </tr> </table> <!-- Email Header : END --> <!-- Email Body : BEGIN --> <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container"> <!-- Hero Image, Flush : BEGIN --> <tr> <td> <img src="http://inventionland.com/wp-content/uploads/2015/09/National_Thank_You_Day.png" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px;"> </td> </tr> <!-- Hero Image, Flush : END --> <!-- 1 Column Text : BEGIN --> <tr> <td style="padding: 0px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Hey '.$name.'! Thank you for signing up as an investor on <a href="http://fundmyventure.co">FundMyVenture</a>. We truly appreciate your support to our platform and being a part of our crowdsourced investment community. <br><br> <!-- Button : Begin --> <table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto"> <tr> <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td"> <a href="http://fundmyventure.co/companies.php" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a"> Browse Active Deals </a> </td>  </tr><tr></tr> </table> <!-- Button : END --> </td> </tr> <!-- 1 Column Text : BEGIN -->  </table> <!-- Email Body : END --> <!-- Email Footer : BEGIN --> <table align="center" width="600" class="email-container"> <tr> <td style="padding: 0px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;"> <br> FundMyVenture Technologies Pvt. Ltd. <br><br> </td> </tr> </table> <!-- Email Footer : END --> </center> </td></tr></table> </body> </html>'
));
*/
?>