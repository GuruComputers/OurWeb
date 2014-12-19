<?php     
        
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $calendar->after_post($month, $day, $year);  
}   

// Call calendar function
$calendar->make_calendar($selected_date, $first_day, $back, $forward, $day, $month, $year);

?>