<?php
// if/else statements

$temp = 81; 
if($temp >= 80) {
    echo 'Life is good - time to go to the beach'; 
} else {
    echo 'who knows???'; 
}

echo '<br>'; 

$temp = 50; 
if($temp <= 50) {
    echo 'It\'s a little chilly'; 
} elseif($temp <=60) {
    echo 'Getting warmer!'; 
} elseif($temp <= 70) {
echo 'We may go to the park!'; 
} elseif($temp <=85)
echo 'We are going to the beach'; 
 else {
    echo 'It is definitely going to be hot!'; 
}


echo '<br>'; 

$salary = 200000; // annual salary 
$some_bonus = .10; 
$med_bonus = .20; 
$big_bonus = .30; 
$sales = 145000;
// if sales is greater than 99999, you will receive small bonus
// if sales is over 120000, you will receive med bonus
//if sales over 140000, you will receive big bonus 

if ($sales <= 99999) {
echo 'No bonus'; 
} elseif($sales <= 119999) {
$salary *= 1.10; 
echo 'I just made 10% over my salary and I made '.$salary.''; 
} elseif($sales <= 139999) {
$salary *=  1.20; 
echo 'I just made 20% over my salary and I made '.$salary.'';
} elseif ($sales <= 150000) {
$salary *= 1.30; 
echo 'I just made 30% over my salary and I made '.$salary.'';
} else {
    echo "I am retiring"; 
}