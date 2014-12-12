<?php
	if ($page == "home") {
		$root = "./";
	} else {
		$root = "../";
	}
	$menu = array("Home", "Portfolio", "Testimonials", "About", "Contact");
	foreach ($menu as $item) {
		if (strtolower($item) != "home"){
			echo '<li><a href="'.$root.strtolower($item).'/"';
		} else {
			echo '<li><a href="'.$root.'"';
		}
   	 	if (strtolower($item) == $page){
   	 		echo ' class="selected"';
   	 	}
   	 	echo '>'.$item.'</a></li>'."\n";
   	 }
?>