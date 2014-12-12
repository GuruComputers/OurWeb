<?php
	$menu = array("Home", "Portfolio", "Testimonials", "About", "Contact");
	foreach ($menu as $item) {
   	 	echo '<li><a href="'.$root.strtolower($item).'.php"';
   	 	if (strtolower($item) == $page){
   	 		echo ' class="selected"';
   	 	}
   	 	echo '>'.$item.'</a></li>'.'/n';
   	 }
?>