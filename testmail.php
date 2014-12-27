<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
	if ( function_exists( 'mail' ) )
	{
	    echo 'mail() is available';
	}
	else
	{
	    echo 'mail() has been disabled';
	} 
   $to = "robotix.master@gmail.com";
   $subject = "This is subject";
   $message = "This is simple text message.";
   $header = "From:sales@gurucomputers.co.uk \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Email sent successfully to Dave...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
</body>
</html>