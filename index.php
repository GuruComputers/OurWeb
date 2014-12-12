<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/main.css">
	<?php
		if (date('m') == '12') {
 			echo "<link rel=\"stylesheet\" href=\"./css/snow.css\">";
		}
	?>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
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
		<br><br>
		<img src="./img/xmashr.png" class="hr"> <!-- bottom hr rule -->
		
		<div id="footer">
			<center>
				<a href="mailto:support@gurucomputers.co.uk"><img src="./img/email.jpg" class="icons">Email Us</a>
				<a href="https://www.youtube.com/user/gurucomputersuk"><img src="./img/youtube.png" class="icons">Guru's Channel</a>
				<a href="https://www.facebook.com/GuruComputersUK"><img src="./img/facebook.png" class="icons">Guru's Facebook</a>
				<img src="./img/twitter.png" class="icons">
				<br><br>
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