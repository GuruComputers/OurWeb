<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div id="wrapper">
		<div id="top">
			<header>
				<a href="./" id="logo"><img src="./img/logo.png" class="logo"></a>
				<nav>
					<ul>
						<?php 
							include 'menu.php';
						?>
					</ul>
				</nav>
			</header>
		</div> <!-- top div closed -->
		<img src="./img/xmashr.png" class="hr"> <!-- top hr rule -->
		<div id="content">
			

			<div id="WebDev">
				<?php include '1.php' ?>
			</div> <!-- WebDev div closed -->
			<div id="CompRepairs">
				<?php include '2.php' ?>
			</div> <!-- CompRepairs div closed -->
			<div id="MobRepairs">
				<?php include '3.php' ?>
			</div> <!-- MobRepairs div closed -->
			<div id="Shop">
				<?php include '4.php' ?>
			</div><!-- Shop div closed -->
			<div style="clear: both;"></div>
		</div><!-- Content Div Closed -->
		<div style="clear: both;"></div>
		<img src="./img/xmashr.png" class="hr"> <!-- bottom hr rule -->
		
		<div id="footer">
			<center>
				<a href="mailto:support@gurucomputers.co.uk"><img src="./img/email.jpg" class="icons">Email Us</a>
				<img src="./img/youtube.png" class="icons">
				<img src="./img/facebook.png" class="icons">
				<img src="./img/twitter.png" class="icons">
				<br/>
				<?php
					$start=2014;
					$current=date("Y");
					$cy="";
					if ($current=$start) {
						$cy=$start;
					}
					if ($current>$start) {
						$cy=$start."-".$current;
					}
					echo "&copy"." ".$cy." Guru Computers Ltd."."\n"; 
				?>
			</center>
		</div> <!-- footer div closed -->

	</div> <!-- wrapper div closed -->
</body>
</html>