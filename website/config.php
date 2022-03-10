
<?php 
ob_start(); 
date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}
$day_array = array(
    "Sunday" => "Sunday",
    "Monday" => "Monday",
    "Tuesday" => "Tuesday",
    "Wednesday" => "Wednesday",
    "Thursday" => "Thursday",
    "Friday" => "Friday",
    "Saturday" => "Saturday",
);

// switch

switch($today){
    case 'Sunday':
        $bird = 'Eagle';
        $description = 'The bald eagle is actually a sea eagle (Haliaeetus species) that commonly occurs inland along rivers and large lakes. The adult male is about 90 cm (36 inches) long and has a wingspan of 2 metres (6.6 feet). Females, which grow somewhat larger than males, may reach 108 cm (43 inches) in length and have a wingspan of 2.5 metres (8 feet).  ';
        $photo = 'images/Bald_Eagle.jpg';
        $alt = 'Bald Eagle';
        break;
    case 'Monday':
        $bird = 'Falcon';
        $description = 'The peregrine falcon is best known for its diving speed during flight—which can reach more than 300 km (186 miles) per hour—making it not only the world’s fastest bird but also the world’s fastest animal. Also called duck hawk, the most widely distributed species of bird of prey, with breeding populations on every continent except Antarctica and many oceanic islands.  ';
        $photo = 'images/Peregrine-falcon.jpg';
        $alt = 'Peregrine Falcon';
        break;
    case 'Tuesday':
        $bird = 'Osprey';
        $description = 'Also called fish hawk, large, long-winged hawk, about 65 cm (26 inches) long, that lives along seacoasts and larger interior waterways, where it catches fish. An osprey flies over the water to hunt. It hovers above its prey and then plunges feet first to seize a fish in its long, curved talons. With a grip secured by sharp spicules on the underside of the toes, the bird carries its prey to a favourite perch to feed. Sometimes after feeding the osprey flies low over the water, dragging its feet as if to wash them. ';
        $photo = 'images/osprey.jpg';
        $alt = 'Osprey';
        break;
    case 'Wednesday':
        $bird = 'Condor';
        $description = 'California condors nest in cliffs, under large rocks, or in other natural cavities, including holes in redwood trees. They generally breed every other year, laying a single unmarked greenish white egg measuring about 11 cm (4 inches) long. Although most California condors reproduce sexually, some female birds have been able to reproduce asexually through parthenogenesis. In 2021 researchers reported that two captive female birds produced chicks that hatched from unfertilized eggs. The California Condor is critically endangered.';
        $photo = 'images/CaliforniaCondor.jpg';
        $alt = 'California Condor';
        break;
    case 'Thursday':
        $bird = 'Kestrel';
        $description = 'Kestrels prey on large insects, birds, and small mammals. They exhibit sexual colour dimorphism, rare among hawks: the male is the more colourful. Kestrels are mainly Old World birds, but one species, the American kestrel (F. sparverius), called sparrow hawk in the United States, is common throughout the Americas. The American kestrel is about 30 cm (12 inches) long, white or yellowish below and reddish brown and slate gray above, with colourful markings on the head. ';
        $photo = 'images/AmericanKestrel.jpg';
        $alt = 'American_Kestrel';
        break;
    case 'Friday':
        $bird = 'Owl';
        $description = 'The Great Horned Owl is a powerful, mottled-brown predator, it is often more than 2 feet (60 cm) long, with a wingspan often approaching 80 inches (200 cm). It usually eats small rodents and birds but has been known to carry off larger prey. Adapted to desert and forest, the species migrates only when food is scarce.';
        $photo = 'images/greathornedowl.jpg'; 
        $alt = 'Great Horned Owl';
        break;
    case 'Saturday':
        $bird = 'Hawk';
        $description = 'The red-tailed hawk (Buteo jamaicensis), the most common North American species, is about 60 cm (24 inches) long, varying in colour but generally brownish above and somewhat lighter below with a rust-coloured tail. This beneficial hunter preys mainly on rodents, but it also catches other small mammals as well as various birds, reptiles (including rattlesnakes and copperheads), amphibians, and even insects.  ';
        $photo = 'images/redtailedhawk.png';
        $alt = 'Red-Tailed Hawk';
        break;
}

//FORM

ob_start();


$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$plant = ''; 
$pot_size = ''; 
$climate = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$plant_err = '';
$pot_size_err = ''; 
$climate_err = ''; 
$comments_err = '';
$privacy_err = '';
$sticky_phone = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your First Name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your Last Name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email.';
    } else {
        $email = $_POST['email'];
    }

    //if (empty($_POST['phone'])) {
    //    $phone_err = 'Please enter your phone number!';
    //} else {
     //   $phone = $_POST['phone'];
    //}

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_err = 'Please enter your phone number';
    }elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
            $phone_err = 'Invalid format. Enter in format xxx-xxx-xxxx';
            $sticky_phone = $_POST['phone'];
            unset($_POST['phone']);
        }else{
        $phone = $_POST['phone'];
        $sticky_phone = $_POST['phone'];
        }
    }

    /* if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if */

    if (empty($_POST['plant'])) {
        $plant_err = 'Please let us know what plant you are looking for!';
    } else {
        $plant = $_POST['plant'];
    }

    if (empty($_POST['climate'])) {
        $climate_err = 'Please select your climate!';
    } else {
        $climate = $_POST['climate'];
    }

    if ($_POST['pot_size'] == null) {
        $pot_size_err = 'What size pot do you need?';
    } else {
        $pot_size = $_POST['pot_size'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Agree if you want the plants!';
    } else {
        $privacy = $_POST['privacy'];
    }
    //end error handling

    // climate function 
    function climate($climate){
        $climate_return = '';
        if (!empty($_POST['climate'])) {
            $climate_return = implode('', $_POST['climate']);
        }
        return $climate_return;
    }
    //end of function
   
    //begin email send 
    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['pot_size'],
        $_POST['climate'],
        $_POST['comments'],
        $_POST['privacy']
    )) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'We\'ve got the plants you\'re looking for, '.$first_name.'';
        $body = '
        First Name: ' .$first_name. '' . PHP_EOL . '
        Last Name: ' .$last_name. '' . PHP_EOL . '
        Pot_size: ' .$pot_size. '' . PHP_EOL . '
        Climate: ' .climate($climate). '' . PHP_EOL . '
        Phone: ' .$phone. '' . PHP_EOL . '
        Email: ' .$email. '' . PHP_EOL . '
        Plant: ' .$plant. '' . PHP_EOL . '
        Comments: ' .$comments. '' . PHP_EOL . '
        ';
          

        $headers = array(
            'From' => 'noreply@christinepestana.com', 
            'Reply-to' => ''.$email.''
             );

        mail($to, $subject, $body, $headers);
        header('Location: thanx.php');

    } // close if not empty statement

 } //close isset




//our config file for project
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}