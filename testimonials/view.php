<?php

	error_reporting(E_ALL);

	$servername = "localhost"; // Host name 
	$username = "customer"; // Mysql username 
	$password = "a8y8y8ebe"; // Mysql password 
	$db_name = "zadmin_testimonials"; // Database name 

	$conn=mysqli_connect($servername, $username, $password, $db_name);

	if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

	echo "<h3>Customer Comments</h3>";

	$sql = "SELECT * from approved WHERE status='Dog'";

	$result=mysqli_query($conn, $sql);
	while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" class="viewer">
<tr>
<td>Name</td>
<td>:</td>
<td><?php echo $rows['reviewer_name']; ?></td>
</tr>
<tr>
<td width="117">Rating</td>
<td width="14">:</td>
<td width="357"><?php echo $rows['rating']; ?> / 5</td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><?php echo $rows['comment']; ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
}
$conn->close(); //close database
?>