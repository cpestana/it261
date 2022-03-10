
<body>
    <?php
    include('config.php');
    include('includes/header.php');
    
    ?>

 

<div id="wrapper">


<div id="hero_index">
<?php
echo '<h2>Things I enjoy</h2>'; 

$photos[0] = 'bird'; 
$photos[1] = 'coffee';
$photos[2] = 'plants';
$photos[3] = 'running';
$photos[4] = 'shuffleboard';

$i = rand(0, 4); 

$selected_image = ''.$photos[$i].'.jpg'; 
echo '<img src="photos/'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = ''; 
$i = rand(0, 4); 
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="photos/'.$selected_image.'" alt=" '.$photos[$i].' ">';
return $my_return; 
}

?>

</div><!--end hero_index-->

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



