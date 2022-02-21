<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christine's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
    include('config.php');
    include('includes/header.php');
    
    ?>

 

<div id="wrapper">


<div id="hero">
    <?php
$photos[0] = 'photo1'; 
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4); 

$selected_image = ''.$photos[$i].'.jpg'; 
echo '<img src=".images'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = ''; 
$i = rand(0, 4); 
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src=".images'.$selected_image.'" alt=" '.$photos[$i].' ">';
return $my_return; 
}

echo random_images($photos); 
?>
</div><!--end hero-->

<main>
<div id="h1-header">
    <h1>Welcome to my Home Page</h1>
    
    </div> <!--end h1-header-->



    <div id="paragraph-header">
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32..</p>
    </div> <!--end paragraph-header-->


</main>

<aside>
   
    <h3>This is the aside area.</h3>
    
  
</aside>
</div> <!---end wrapper-->

<?php
include ('includes/footer.php'); 
?>



</body>
</html>