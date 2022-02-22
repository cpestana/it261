<?php
//we need to define the page that we are on as page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'index.php'; 
$title = 'Our Home Page';
$body = 'home';
break;
case 'Daily.php'; 
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


        

    <!-- <nav>
    <ul>
            <li><a href="daily.php">Switch</a></li>
            <li><a href="Troubleshoot.php">Troubleshoot</a></li>
            <li><a href="Calculator.php">Calculator</a></li>
            <li><a href="Email.php">Email</a></li>
            <li><a href="Database.php">Database</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
         </ul>
    </nav>    -->

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
    

<body class="<?php echo $body  ;?>">

</body>



</html>