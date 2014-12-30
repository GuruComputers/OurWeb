
<?php
	$page = "testimonials";
	include "../includes/head.php";
    include $root."includes/header.php";
?>

		<div id="content">
			<div id ="testimonials_content">
				<form action="add.php" method="post" accept-charset="utf-8" align="center">
    				<fieldset><legend><h1>Add Testimonial</h1></legend>
    					<p>
    						<label for="name"><h2>Your Name</h2></label>
                			<input type="text" name="name" id="name" />
    					</p>
    					<p>
    						<label><h2>Service Performed</h2></label>
    						<input type="checkbox" name="comprepair" value="1" /> Computer Repair<br /><br />
							<input type="checkbox" name="mobrepair" value="1" /> Mobile Phone Repair<br /><br />
							<input type="checkbox" name="webdev" value="1" /> Website Development<br /><br />
							<input type="checkbox" name="printing" value="1" /> Printing
    					<p>
    						<label for="rating"><h2>Rating</h2></label>
    						<input type="radio" name="rating" value="5" /> 5 
    						<input type="radio" name="rating" value="4" /> 4
    						<input type="radio" name="rating" value="3" /> 3
    						<input type="radio" name="rating" value="2" /> 2 
    						<input type="radio" name="rating" value="1" /> 1
    					</p>
    					<p>
    						<label for="comment"><h2>Your Comment</h2></label>
    						<textarea name="comment" rows="8" cols="40"></textarea>
       					</p>
    					<p>
    						<input type="submit" value="Submit Review">
    					</p>
    					<input type="hidden" name="status" value="Cat" id="status">
					</fieldset>
				</form>
    			<br /><br />
    			<?php
       				 include 'view.php';
    			?>
			</div>	
		</div><!-- Content Div Closed -->
		
		<?php
			include $root."includes/footer.php";
		?>