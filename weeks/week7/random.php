<?php

//rand() function - and how can we use it???

echo '<h2>Playing with one dice</h2>'; 

$dice = rand(1, 6); 
echo $dice; 

echo '<h2>Playing with two dice</h2>';
$dice1 = rand(1, 6); 
$dice2 = rand(1, 6); 

echo '
<b>Dice 1:</br> '.$dice1.' </br>
<b>Dice 2:</br> '.$dice2.' </br>
';

echo '<h2>Playing with two dice</h2>
<p>If we get two sixes...you are a big winner<br>
If you get doubles, you are still a winner<br>
You lose!</p>'; 

$dice11 = rand(1, 6); 
$dice12 = rand(1, 6); 

if($dice11 == 6 && $dice12 == 6) {
    echo 'Big Winner! <br> And your numbers are: '.$dice11.' and <br>
    '.$dice12.'';
} elseif($dice11 == $dice12) {
    echo 'You are still a winner! <br> And your numbers are: '.$dice11.' and <br>
    '.$dice12.'';
} else {
    echo 'You did not win!';
}

echo '<h2>Display Random Images</h2>'; 

$photos[0] = 'photo1'; 
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4); 

$selected_image = ''.$photos[$i].'.jpg'; 
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = ''; 
$i = rand(0, 4); 
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="/images'.$selected_image.'" alt=" '.$photos[$i].' ">';
return $my_return; 
}

echo random_images($photos); 