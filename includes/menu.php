<?php
	$menu = array("Portfolio", "Testimonials", "Services");
	foreach ($menu as $item) {
		if (strtolower($item) == "portfolio") {
			echo '<li><a href="'.$root.strtolower($item).'/web.php"';
		} else {
			echo '<li><a href="'.$root.strtolower($item).'/"';
		}
		if (strtolower($item) == $page) {
			echo ' class="selected"';
		}
		echo '>'.$item.'</a></li>'."\n";
	}
?>