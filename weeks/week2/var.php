<?php
// introduction to our variables 
// as well as syntax
// what is a variable? a variable is a container


$name = 'Christine';
// the information between single quotes is a string
echo $name; 
echo '<br>'; 
$name = 'Derek'; 
echo $name; 
echo '<br>'; 
echo 'My first name is $name'; 
echo '<br>'; 
echo "My first name is $name"; 
// I like single quotes because later on we will be 
// placing php inside our html values <a href=""

echo 'My first name is '.$name.' '; 
echo '<br>'; 
$temp = 45; 
echo 'The temperature today was '.$temp.' degrees'; 
echo '<br>';
// this is a data type integer

$body_temp = 98.6; 
// anything with a decimal is called a float
echo $body_temp; 

//another data type is boolean = true or false 
//another data type is NULL
// <select><option value=""NULL>Select one </option>  </
//select>

$vehicle = 'truck';
echo '<br>';
$x = 20; 
$y = 30; 
$z = $x * $y; 
echo $z; 

//circumference of a circle is 2 pie r
echo '<br>'; 
$pie = 3.14; 
$radius = 10; 
$circumference = (2 * $pie) * $radius; 
echo $circumference; 

echo '<br>';
$celcius = 4; 
$far = ($celcius * 9/5) + 32; 
$friendly_far = ceil($far); 
echo $friendly_far; 
//ceil is rounding up
//floor is rounding down

echo '<br>';
$celcius = 4; 
$far = ($celcius * 9/5) + 32; 
echo ceil($far); 
//another function to convert degrees

echo '<br>';
$money = 10330; 
$divide = 71; 
$amount = $money / $divide; 
echo 'I now have <b>$'.number_format($amount, 2).'</b>'; 

echo '<br>';
//number_format(argument, 2)
$friendly_amount = number_format($amount, 2);
echo '<p>I now have <b>$'.$friendly_amount.' </b> dollars!</p>';

?>

<h1>Now we will be playing with the concatetnation operator</h1>

<?php 

$first_name = 'Christine'; 
$last_name = 'Pestana'; 
echo '<br>';
echo $first_name; 
echo '<br>'; 
echo $last_name; 
echo '<br>';  

$name = 'Christine'; 
$name = 'Pestana'; 
echo $name; 
echo '<br';

$x = 30; 
$y = 3; 
$z = $x / $y; 
echo $z; 
echo '<br';

$x = 30; 
$x /= 3; 
echo $x; 
