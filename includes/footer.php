		<div id="footer">
			<center>
				<?php
					echo '<a href="mailto:support@gurucomputers.co.uk"><img src="'.$root.'img/email.jpg" class="icons">Email Us</a>'."\n";
					echo '<a href="https://www.youtube.com/user/gurucomputersuk" target="_blank"><img src="'.$root.'img/youtube.png" class="icons">Guru Channel</a>'."\n";
					echo '<a href="https://www.facebook.com/GuruComputersUK" target="_blank"><img src="'.$root.'img/facebook.png" class="icons">Guru Facebook</a>'."\n";
					echo '<a href="https://twitter.com/GuruComputersUK" target="_blank"><img src="'.$root.'img/twitter.png" class="icons">Guru Twitter</a>'."\n";
				?>
				<br><br>
				<?php
					$start=2014;
					$current=date("Y");
					$cy="";
					if ($current=$start) {
						$cy=$start;
					}
					if ($current>$start) {
						$cy=$start."-".$current;
					}
					echo "&copy"." ".$cy." Guru Computers Ltd."."\n"; 
				?>
			</center>
		</div> <!-- footer div closed -->