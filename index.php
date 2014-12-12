<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div id="wrapper">
		<div id="top">
			<header>
				<a href="img/logo.png" id="logo"><img src="img/logo.png" class="logo"></a>
				<nav>
					<ul>
						<?php 
							include 'menu.php';
						?>
					</ul>
				</nav>
			</header>
		</div>

		<div class="line">
			<hr/>
		</div>

		<div id="container">
			<div id="WebDev">
				<?php include '1.php' ?>
			</div>
			<div id="CompRepairs">
				<?php include '2.php' ?>
			</div>
			<div id="MobRepairs">
				<?php include '3.php' ?>
			</div>
			<div id="Shop">
				<?php include '4.php' ?>
			</div>
		</div>

		<div class="line">
			<hr/>
		</div>

		<div id="footer">
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
		</div>

	</div>
</body>
</html>