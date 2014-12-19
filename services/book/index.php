<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>
	<script src="js/jquer.js" type="text/javascript"></script>
	<script src="js/jquery-cookies.js" type="text/javascript"></script>
	<script src="js/jquery-base64.js" type="text/javascript"></script>
	<?php 
		include('js/header-js.php'); 
	?>
	<script src="js/main.js" type="text/javascript"></script>
	<title>Guru Computers</title>
	<?php
		$page = "home";
		$root = "./";
		echo '<link rel="stylesheet" href="'.$root.'css/normalize.css">'."\n";
		echo '<link rel="stylesheet" href="'.$root.'css/main.css">'."\n";
		if (date('m') == '12') {
				echo '<link rel="stylesheet" href="'.$root.'css/snow.css">'."\n";
		}
	?>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="notification_div">
	<div id="notification_inner_div">
		<div id="notification_inner_cell_div">
		</div>
	</div>
</div>

<div id="header_div"><?php include('header.php'); ?></div>

<h1>Guru Computer</h1>
<h2>Booking System</h2>

<div id="content_div"></div>

<div id="preload_div">
	<img src="img/loading.gif" alt="Loading">
</div>

</body>

</html>
