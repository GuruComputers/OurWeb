<?php
	$menu = array("Home", "Portfolio", "Testimonials", "About", "Contact");
	foreach ($menu as $item) {
		if (strtolower($item) != "home"{
			echo '<li><a href="'.'./'.strtolower($item).'.php"';
		} else {
			echo '<li><a href="./"';
		}
   	 	if (strtolower($item) == $page){
   	 		echo ' class="selected"';
   	 	}
   	 	echo '>'.$item.'</a></li>'."\n";
   	 }
?>