<?php

$mysql_server = "localhost";
$mysql_user = "gameuser";
$mysql_password = "me9yqabav";
$mysql_database = "zadmin_elitenation";

$conn = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to establish a DB connection");

$db = mysql_select_db("$mysql_database") or die ("Unable to establish a DB connection");

?>