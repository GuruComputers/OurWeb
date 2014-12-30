	<?php
		$page = "portfolio";
		include "../includes/head.php";
		include $root."includes/header.php";
	?>

		<div id="content">
			<ul id="portfolio">
				<?php
					$files = scandir('images/'); 
					foreach ($files as $file){
						if($file != '.' && $file != '..'){
							$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
							echo '<li class="portfolio_item"><a href="http://www.'.$withoutExt.'" target="_blank">'."\n".'<img src="images/'.$file.'" alt="Portfolio Image">'."\n";
							echo '<h2>www.'.$withoutExt.'</h2></a></li>'."\n";
						}
					}
				?>
			</ul>	
		</div><!-- Content Div Closed -->
		
		<?php
			include $root."includes/footer.php";
		?>