<head>
	<meta charset="utf-8">
	<title>Guru Computers</title>
	<?php
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
	<meta name="description" content="Guru Computers Ltd pride ouselves on excellent customer service. we go the extra mile so you don't have too. Our services range from computer parts to bespoke website design. Need a demo cd designed, cd's burnt, printed, packaged then look no further we can do it.">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Indie+Flower|Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>