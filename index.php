<!DOCTYPE html>
<html>
	<?php
		$page = "home";
		include "./includes/head.php";
	?>

<body>
	<div id="wrapper">
		<div id="top">
		<?php
			include $root."includes/header.php";
		?>
		</div> <!-- top div closed -->
		<?php
			echo '<img src="'.$root.'img/xmashr.png" class="hr">'."\n";
		?>
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
		
		<?php
			include $root."includes/footer.php";
		?>

	</div> <!-- wrapper div closed -->
</body>
</html>