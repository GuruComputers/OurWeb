<?php

error_reporting(E_ALL);
$to = "sales@gurucomputers.co.uk";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

$mail=mail($to,$subject,$txt,$headers);

if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}

?>