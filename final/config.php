
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
        $bird = 'Big Ben';
        $description = 'The iconic clock tower housing the bell known as Big Ben is one of the most recognizable sights in London, poised as it is on the bank of the Thames River, highlighting both the Houses of Parliament and Westminster Abbey. While the tower is not open to foreign visitors, the clock can be enjoyed and photographed from several angles at ground level and makes an excellent addition to a visit of nearby Westminster Abbey. There are often choral performances in the Abbey at four or five o’clock, dovetailing nicely with a visit to Big Ben.';
        $photo = 'images/bigben.jpg';
        $alt = 'Big Ben';
        break;
    case 'Monday':
        $bird = 'Tower Bridge';
        $description = 'While not the famed London Bridge of the nursery rhyme, Tower Bridge is the city’s most ornate and recognizable bridge. Spanning the Thames with its dual towers and marking the site of the infamous Tower of London, Tower Bridge can be enjoyed by crossing its span in one of London’s ubiquitous taxi cabs, although it is best admired from the water. Visitors can book one of the many tour boats that cruise the Thames, beginning at the Houses of Parliament and ending at Tower Bridge, with incredible glimpses of famous city sights like St. Paul’s Cathedral and the Globe Theatre along the way.';
        $photo = 'images/towerbridge.jpg';
        $alt = 'Tower Bridge';
        break;
    case 'Tuesday':
        $bird = 'Stonehenge';
        $description = 'While certainly not the only stone circle in Britain, Stonehenge is the most famous, its compelling and atmospheric ruins offering a facet view of life in England’s mysterious past. Easily reached from London, Stonehenge makes a wonderful day trip, where visitors can tour the site and learn about its prehistoric builders at the nearby museum. Each June 21st, marking the Solstice, visitors are allowed to wander freely among the stones. Stonehenge forms only one part of a vast temple complex, as the Salisbury Plain is littered with ceremonial sites. The nearby and much older Woodhenge makes an interesting side trip of a visit to Stonehenge.';
        $photo = 'images/stonehenge.jpg';
        $alt = 'Stonehenge';
        break;
    case 'Wednesday':
        $bird = 'Windsor Castle';
        $description = 'While Buckingham Palace is the residence of the Monarch while in London, Windsor Castle is the family home, even giving the current royal family their surname. Located just outside London, the castle hails from the time of William the Conqueror, and its resplendent state rooms filled with priceless art and historic treasures are open to the public. Visitors can also tour St. George’s Chapel, where the tombs of King Henry VIII, Queen Jane Seymour and other notable figures of British history can be found. At certain times of the day, visitors may be lucky enough to enjoy the formal Changing of the Guards.';
        $photo = 'images/windsor_castle.jpg';
        $alt = 'Windsor Castle';
        break;
    case 'Thursday':
        $bird = 'White Cliffs of Dover';
        $description = 'One of the most iconic sights in all of Britain, the White Cliffs of Dover rise high above the sea in gracefully undulating swells of brilliant white limestone chalk, creating an imposing natural wall that extends for miles along the coast of Kent. Punctuated by pretty lighthouses and the sprawling outline of Dover Castle, the area holds a range of enticing sights. You can wander along the pathways that line the cliffs and admire the sea crashing several hundred feet below or try to catch a glimpse of the coast of France across the Channel on a clear day.';
        $photo = 'images/white_cliffs_of_dover.jpg';
        $alt = 'White Cliffs of Dover';
        break;
    case 'Friday':
        $bird = 'St. Michael’s Mount';
        $description = 'On the Cornwall peninsula that forms the southernmost point of the British Isles, St. Michael’s Mount is a tidal island that offers a magical pathway from the mainland that is exposed as the tide recedes. The earliest buildings on the island date to 800 years ago, but developments in the 16th and 17th centuries gave the island its present form. An appealing castle can be explored, and the pretty gardens that frame the building house semi-tropical plants that grow in Cornwall’s relatively balmy climate. Visits to the Mount must be timed to the tides, and the coastal villages near the Mount offer a glimpse of England’s maritime past and offer quaint tea shops and pubs.';
        $photo = 'images/st_michaels_mount.jpg'; 
        $alt = 'St. Michael\'s Mount';
        break;
    case 'Saturday':
        $bird = 'Durdle Door';
        $description = 'This graceful limestone arch forms a spectacular focal point along the English county of Dorset’s famed Jurassic Coast. Golden sand frames a gentle bay where the rocky escarpment juts into the sea. An idyllic pathway winds down to the Durdle Door from West Lulworth, offering expansive views not only of the many interesting formations that line the coast, but also the limestone cliffs and vast, unforgettable views of the ocean. Thought to be named for the Old English word for “drill,” the Durdle Door has been the subject of poetry and art for more than a thousand years and makes a wonderful outdoor destination to visit.';
        $photo = 'images/durdle_door.jpg';
        $alt = 'Durdle Door';
        break;
}


// config file for england-cities database
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