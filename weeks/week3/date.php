<?php
//playing with date function
echo date ("l") . "<br>"; 
echo date("l, F j, Y h:i");
//day, month, date year time
date_default_timezone_set('America/Los_Angeles'); 
echo date ("l") . "<br>"; 
echo date("l, F j, Y h:i");

echo '<br>'; 
$our_date = date('H:i ');
echo $our_date; 
echo '<br>'; 
if($our_date <= 11) {
    echo '<h2>Good Morning!</h2> <img ';
} elseif($our_date <= 17) {
    echo 'Good Afternoon!'; 
} else {
    echo 'Good Evening'; 
}