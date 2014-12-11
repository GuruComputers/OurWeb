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
	<header>
		<a href="img/logo.png" id="logo"></a>
		<nav>
			<ul>
				<?php 
					include 'menu.php';
				?>
			</ul>
		</nav>
	</header>

<div id="container">
	<div id="one">
		<?php include '1.php' ?>
	</div>
	<div id="two">
		<?php include '2.php' ?>
	</div>
	<div id="three">
		<?php include '3.php' ?>
	</div>
	<div id="four">
		<?php include '4.php' ?>
	</div>
</div>

<div id="footer">
	<?php include 'footer.php' ?>
</div>

</body>
</html>