<?php

// Make a MySQL Connection
$host="localhost";
$user="guru_bookings";
$password="JD44EcdZxAjd4Hqy";
$db = "guru_bookingsystem";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>