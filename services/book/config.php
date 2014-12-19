<?php

// MySQL Credentials
define('global_mysql_server', 'localhost');
define('global_mysql_user', 'booking_system');
define('global_mysql_password', 'KxGQ3f4GpwfaT484');
define('global_mysql_database', 'guru_bookingsystem');

// Salt for Password Encryption
define('global_salt', '5TY0ujN7v');

// Days to remember login (if user chooses to remember them)
define('global_remember_login_days', '100');

// Secret Code
define('global_secret_code', '1071816');

// Webmaster Email
define('global_webamster_email', 'dave@gurucomputers.co.uk');

// Full URL to website. Used in Reservation SMS
define('global_url', 'http://www.gurucomputers.co.uk/services/book/');

// Currency
define('global_currency', '£');

// Number of Weeks Customers can book in advance
define('global_weeks_forward', '4');

// Possible Reservation Times
$global_times = array('09-10', '10-11', '11-12', '13-14', '14-15', '15-16', '16-17');

?>