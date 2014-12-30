<!DOCTYPE html>
<html>
<?php
	$page = "testimonials";
	include "../includes/head.php";
?>

<body>
	<div id="wrapper">
		<div id="top">
			<?php
				include $root."includes/header.php";
			?>
		</div> <!-- top div closed -->
		<?php
			echo '<img src="'.$root.'img/xmashr.png" class="hr">';
		?>
<?php

	$servername = "localhost"; // Host name 
	$username = "customer"; // Mysql username 
	$password = "a8y8y8ebe"; // Mysql password 
	$db_name = "zadmin_testimonials"; // Database name 

	// Connect to server and select database.
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$datetime=date("y-m-d h:i:s"); //date time

	$sql = "INSERT INTO approved (comprepair, mobrepair, webdev, printing, rating, comment, reviewer_name, review_date, status) VALUES ('$_POST[comprepair]','$_POST[mobrepair]', '$_POST[webdev]', '$_POST[printing]', '$_POST[rating]', '$_POST[comment]', '$_POST[name]', '$datetime', '$_POST[status]')";

	if ($conn->query($sql) === TRUE) {
    	echo "<br /><br />New record created successfully, Redirecting to Testimonials Page...";
    	header('Refresh: 5; URL=./index.php');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>
<?php
	include $root."includes/footer.php";
?>
	</div> <!-- wrapper div closed -->
</body>
</html>