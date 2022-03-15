
<body>
    <?php
    include('config.php');
    include('includes/header.php');
    
    ?>

 

<div id="wrapper">


<div id="hero_index">
<?php
echo '<h3>“This blessed plot, this earth, this realm, this England.” - Richard III, Shakespeare</h3>'; 

$photos[0] = 'britain'; 
$photos[1] = 'mapofengland';
$photos[2] = 'phonebooth';
$photos[3] = 'guards';

$i = rand(0, 3); 

$selected_image = ''.$photos[$i].'.jpg'; 
echo '<img id="images" src="images/'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = ''; 
$i = rand(0, 3); 
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img id="images" src="images/'.$selected_image.'" alt=" '.$photos[$i].' ">';
return $my_return; 
}

?>

</div><!--end hero_index-->

<main>
<div id="h1-header">
    <h1>Welcome to England's Most Exciting Cities Page!</h1>
    
    </div> <!--end h1-header-->



    <div id="paragraph-header">
    <p>Laced by great rivers and small streams, England is a fertile land, and the generosity of its soil has supported a thriving agricultural economy for millennia. In the early 19th century, England became the epicentre of a worldwide Industrial Revolution and soon the world’s most industrialized country. Drawing resources from every settled continent, cities such as Manchester, Birmingham, and Liverpool converted raw materials into manufactured goods for a global market, while London, the country’s capital, emerged as one of the world’s preeminent cities and the hub of a political, economic, and cultural network that extended far beyond England’s shores. Today the metropolitan area of London encompasses much of southeastern England and continues to serve as the financial centre of Europe and to be a centre of innovation—particularly in popular culture.</p>
    </div> <!--end paragraph-header-->


</main>

<aside>
   
    <h3>This is the aside area.</h3>
    
  
</aside>
</div> <!---end wrapper-->

<?php
include ('includes/footer.php'); 
?>