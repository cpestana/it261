<?php
//we need to define the page that we are on as page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'index.php'; 
$title = 'Our Home Page';
$body = 'home';
break;
case 'about.php'; 
$title = 'Our About Page';
$body = 'home';
break;
case 'project.php'; 
$title = 'Our Project Page';
$body = 'home';
break;
case 'contact.php'; 
$title = 'Our Contact Page';
$body = 'home';
break;
case 'gallery.php'; 
$title = 'Our Gallery Page';
$body = 'home';
break;
case 'daily.php'; 
$title = 'Our Daily Page';
$body = 'daily inner'; 
}

$nav['index.php'] = 'Home'; 
$nav['about.php'] = 'About'; 
$nav['daily.php'] = 'Daily'; 
$nav['project.php'] = 'Project'; 
$nav['contact.php'] = 'Contact'; 
$nav['gallery.php'] = 'Gallery'; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<header>


    <nav>
<ul>
    <?php
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
    echo '<li><a class="current" href="'.$key.'"> '.$value.'</a>
    </l>'; 
    } else {
        echo '<li><a class="" href="'.$key.'"> '.$value.'</a>
        </l>'; 
    }
} //edn for each 
    ?>
    </ul>
    </nav>


</header>
    

