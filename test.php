<?php
$to_address = "revdave31337@gmail.com";
$subject = "This goes in the subject line of the email!";
$message = "This is the body of the email.\n\n";
$message .= "More body: probably a variable.\n";
$headers = "From: webmaster@gurucomputers.co.uk\r\n";
mail("$to_address","$subject","$message","$headers");
echo "Mail Sent.";
?>