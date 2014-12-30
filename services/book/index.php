<?php

include('php/connect.php'); 
include('classes/class_calendar.php');

$calendar = new booking_diary($link);

if (isset($_GET['month'])) $month = $_GET['month']; else $month = date("m");
if (isset($_GET['year'])) $year = $_GET['year']; else $year = date("Y");
if (isset($_GET['day'])) $day = $_GET['day']; else $day = 0;

$selected_date = mktime(0, 0, 0, $month, 01, $year); // Make a timestamp based on the GET values
$first_day = date("N", $selected_date) - 1; // Gives numeric representation of the day of the week 1 (for Monday) through 7 (for Sunday)
$back = strtotime("-1 month", $selected_date);
$forward = strtotime("+1 month", $selected_date);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<?php
		$page = "services";
		if ($page == "home") {
			$root = "../";
		} else {
			$root = "../../";
		}
		echo '<link rel="stylesheet" href="'.$root.'css/normalize.css">'."\n";
		echo '<link rel="stylesheet" href="'.$root.'css/main.css">'."\n";
		echo '<link rel="stylesheet" href="'.$root.'css/bookings.css">'."\n";
		if (date('m') == '12') {
 			echo '<link rel="stylesheet" href="'.$root.'css/snow.css">'."\n";
		}
	?>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<script language="javascript" type="text/javascript">
	/* Preload book now image */
	sub_button = new Image(); 
	sub_button.src = "images/book_mo.png";
	</script>
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
			<center>
			<h1>Please Note, We require 24 hours notice before the slot you would like your repair booked for</h1>
				<?php     
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
					$calendar->after_post($month, $day, $year);  
				}   

				// Call calendar function
				$calendar->make_calendar($selected_date, $first_day, $back, $forward, $day, $month, $year);
				?>
			</center>
		</div><!-- Content Div Closed -->
		
		<?php
			include $root."includes/footer.php";
		?>