<?php

include_once('main.php');

if(check_login() != true) { exit; }

?>

<div class="box_div" id="help_div">
<div class="box_top_div"><a href="#">Start</a> &gt; Help</div>
<div class="box_body_div">

<h3>General Service</h3>

<ul>
<li><b>How much does it cost?</b><br>The current price per General Service is <?php echo global_price . ' ' . global_currency; ?>.</li>
<li><b>How do I book a Genral Service?</b><br>Click on the time you wish to reserve.</li>
<li><b>How do I remove a Booking?</b><br>Click on the Booking you wish to remove.</li>
<li><b>What reservation restrictions are there?</b><br>You must give at least 24 hours between the time of Booking and your requested Booking Slot. You can't make or remove reservations back in time or remove other users' reservations. The webmaster may restrict how many weeks forward in time you can make reservations.</li>
</ul>

<h3>Other</h3>

<ul>
<li><b>How do I change my name, email and/or password?</b><br>You can do that in the <a href="#cp">control panel</a>.</li>
</ul>

<?php

if($_SESSION['user_is_admin'] == '1')
{

?>

<h3>Admin help</h3>

<ul>
<li><b>Are there any reservation restrictions for admins?</b><br>No, you can make and remove reservations back and forward in time as you wish, and you can delete other users' reservations. It will require a confirmation.</li>
<li><b>How do I manage users and reservations?</b><br>You can do that in the <a href="#cp">control panel</a>. You can reset a user's passwords (if the user has forgot it), change a user's permissions (admin or not), delete a user's reservations and delete a user. Just pick a user and choose what to do. All the red buttons will require a confirmation.</li>
<li><b>Can I delete all users and reservations?</b><br>You can do that in the <a href="#cp">control panel</a>. Your user and reservations will not be deleted unless you choose to delete everything.</li>
<li><b>How do I change the other options, like possible reservation times, secret code etc?</b><br>The webmaster must do that in the configuration file (config.php).</li>
<li><b>Will changing the price affect previous reservations?</b><br>No. A new price will only apply for reservations made after the price change.</li>
</ul>

<?php

}

?>

</div></div>
