<?php
include('config.php'); 
include('./includes/header.php'); 
?>

<main>

<h1>The House of Gryffindor</h1>
<?php
$sql = 'SELECT * FROM gryffindor'; 
//then we are going to connect to the database!
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we are asking if the number of rows is greater than zero, then we will be able to see the table --almost

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

echo '
<h2>Information about '.$row['first_name'].'</h2>
<ul>
<li><b>First Name:</b> '.$row['first_name'].'</li>
<li><b>Last Name:</b> '.$row['last_name'].'</li>
<li><b>Details:</b> '.$row['details'].'</li>
</ul>
<p>For more information about '.$row['first_name'].' Click <a href="people-view.php?id='.$row['people_id'].'">Here</a></p>
';

} //close while loop


} //close if statement

?>
</main>

<aside>
<?php
$photos[0] = 'gryffindorcrest'; 
$photos[1] = 'hogwarts';
$photos[2] = 'hogwartsexpress';
$photos[3] = 'hogwartshall';
$photos[4] = 'swordofgryffindor';

$i = rand(0, 4); 

$selected_image = ''.$photos[$i].'.jpg'; 
echo '<img id="photos" src="photos/'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = ''; 
$i = rand(0, 4); 
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img id="photos" src="photos/'.$selected_image.'" alt=" '.$photos[$i].' ">';
return $my_return; 
}



?>
</aside>

</div><!--end wrapper from header.php-->

<?php

include('./includes/footer.php'); 