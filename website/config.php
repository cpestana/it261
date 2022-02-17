
<?php 

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

?>