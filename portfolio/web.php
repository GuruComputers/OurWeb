<!DOCTYPE html>
<html>
	<?php
		$page = "porfolio";
		include "../includes/head.php";
	?>

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
			<ul id="portfolio">
				<?php
					$files = scandir('images/'); 
					foreach ($files as $file){
						if($file != '.' && $file != '..'){
							$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
							echo '<li class="portfolio_item"><a href="http://www.'.$withoutExt.'" target="_blank">'."\n".'<img src="images/'.$file.'" alt="Portfolio Image"></a>'."\n";
							echo '<h2>www.'.$withoutExt.'</h2></li>'."\n";
						}
					}
				?>
			</ul>	
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