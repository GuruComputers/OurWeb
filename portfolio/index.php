<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<?php
		$page = "portfolio";
		if ($page == "home") {
			$root = "./";
		} else {
			$root = "../";
		}
		echo '<link rel="stylesheet" href="'.$root.'css/normalize.css">'."\n";
		echo '<link rel="stylesheet" href="'.$root.'css/main.css">'."\n";
		if (date('m') == '12') {
 			echo '<link rel="stylesheet" href="'.$root.'css/snow.css">'."\n";
		}
	?>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper">
		<div id="top">
			<header>
				<?php
					echo '<a href="'.$root.'" id="logo"><img src="'.$root.'img/logo.png" class="logo"></a>'."\n";
				?>
				<nav>
					<ul>
						<?php 
							include $root.'menu.php';
						?>
					</ul>
				</nav>
			</header>
		</div> <!-- top div closed -->
		<?php
			echo '<img src="'.$root.'img/xmashr.png" class="hr">';
		?>
		<div id="content">
			
		</div><!-- Content Div Closed -->
		<br><br>
		
		<div id="footer">
			<center>
				<?php
					echo '<a href="mailto:support@gurucomputers.co.uk"><img src="'.$root.'img/email.jpg" class="icons">Email Us</a>';
					echo '<a href="https://www.youtube.com/user/gurucomputersuk" target="_blank"><img src="'.$root.'img/youtube.png" class="icons">Guru Channel</a>';
					echo '<a href="https://www.facebook.com/GuruComputersUK" target="_blank"><img src="'.$root.'img/facebook.png" class="icons">Guru Facebook</a>';
					echo '<a href="https://twitter.com/GuruComputersUK" target="_blank"><img src="'.$root.'img/twitter.png" class="icons">Guru Twitter</a>';
				?>
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