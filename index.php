	<?php
		$page = "home";
		include "./includes/head.php";
		include $root."includes/header.php";
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
		
		<?php
			include $root."includes/footer.php";
		?>