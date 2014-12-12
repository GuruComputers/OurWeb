<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
	<?php
		if (date('m') == '12') {
 			echo "<link rel=\"stylesheet\" href=\"../css/snow.css\">"."\n";
		}
	?>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper">
		<div id="top">
			<header>
				<a href="../" id="logo"><img src="../img/logo.png" class="logo"></a>
				<nav>
					<ul>
						<?php 
							$page = "portfolio";
							include '../menu.php';
						?>
					</ul>
				</nav>
			</header>
		</div> <!-- top div closed -->
		<img src="../img/xmashr.png" class="hr"> <!-- top hr rule -->
		<div id="content">
			
		</div><!-- Content Div Closed -->
		<br><br>
		<img src="../img/xmashr.png" class="hr2"> <!-- bottom hr rule -->
		
		<div id="footer">
			<center>
				<a href="mailto:support@gurucomputers.co.uk"><img src="../img/email.jpg" class="icons">Email Us</a>
				<a href="https://www.youtube.com/user/gurucomputersuk" target="_blank"><img src="../img/youtube.png" class="icons">Guru's Channel</a>
				<a href="https://www.facebook.com/GuruComputersUK" target="_blank"><img src="../img/facebook.png" class="icons">Guru's Facebook</a>
				<a href="https://twitter.com/GuruComputersUK" target="_blank"><img src="../img/twitter.png" class="icons">Guru's Twitter</a>
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