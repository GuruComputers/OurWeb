<?php
	$menu = array("Portfolio", "Testimonials", "Services", "Shop", "About", "Contact");
	foreach ($menu as $item) {
		if (strtolower($item) == "portfolio") {
			echo '<li><a href="'.$root.strtolower($item).'/web.php"';
		} else {
			echo '<li><a href="'.$root.strtolower($item).'/"';
		}
		echo '>'.$item.'</a></li>'."\n";
	}
?>