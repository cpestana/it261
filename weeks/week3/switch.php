<?php

// $variable = 'Life is good!'; 
// if(isset($variable)) {
//     echo 'Yippy-Skippy!!!'; 
// } else {
//     echo 'Not'; 
// }

//GLOBAL VARIABLES are capitalized and start with $_GET

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
$today = $_GET['today']; 
} else {
$today = date('l');   
}

// switch 

switch($today) {
    case 'Thursday' :
    $coffee = '<h2>Thursday is our Cap Day!</2>';
    $pic = 'cap.png'; 
    $alt = 'Cappucino'; 
    $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria with later development taking place in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.'; 
    break; 

    case 'Friday' :
    $coffee = '<h2>Friday is our Americano Day!</2>';
    $pic = 'americano.png'; 
    $alt = 'Americano'; 
    $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.'; 
    break; 

    case 'Saturday' :
    $coffee = '<h2>Saturday is our Regular Joe Day!</2>';
    $pic = 'coffee.png'; 
    $alt = 'Coffee'; 
    $content = 'Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain flowering plants in the Coffea genus. From the coffee fruit, the seeds are separated to produce a stable, raw product: unroasted green coffee. '; 
    break; 

    case 'Sunday' :
    $coffee = '<h2>Sunday is our Green Tea Day!</2>';
    $pic = 'green-tea.png'; 
    $alt = 'Green Tea'; 
    $content = 'Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East and Southeast Asia.'; 
    break; 

    case 'Monday' :
    $coffee = '<h2> Monday is our Latte Day!</2>';
    $pic = 'latte.png'; 
    $alt = 'Latte'; 
    $content = 'Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.'; 
    break; 

    case 'Tuesday' :
    $coffee = '<h2> Tuesday is our Pumpkin Latte Day!</2>';
    $pic = 'pumpkin.png'; 
    $alt = 'Pumpkin Latte'; 
    $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.'; 
    break; 

    case 'Wednesday' :
    $coffee = '<h2>Wednesday is our Frappuccino Day!</2>';
    $pic = 'frap.png'; 
    $alt = 'Frappuccino'; 
    $content = 'Frappuccino is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.'; 
    break; 


}

?>
<doctype! html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
        #wrapper{
            width:940px;
            margin:290px auto;
        }
        img{
            max-width:300px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>Wonderful Switch Classwork Exercise!</h1>
        <?php
        echo $coffee;
        ?>

        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
       
        <p><?php echo $content;?></p>

        <h2>Check out our daily specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div> <!--end wrapper-->
</body>
</html>