<?php
include('config.php'); 
include('./includes/header.php'); 
?>

<main>

<h1>The most exciting cities in England</h1>
<?php
$sql = 'SELECT * FROM england'; 
//then we are going to connect to the database!
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we are asking if the number of rows is greater than zero, then we will be able to see the table --almost

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

echo '
<h2>Information about '.$row['city_name'].'</h2>
<ul>
<li><b>City:</b> '.$row['city_name'].'</li>
<li><b>Population:</b> '.$row['population'].'</li>
</ul>
<p>For more information about '.$row['city_name'].' Click <a href="city-view.php?id='.$row['england_id'].'">Here</a></p>
';

} //close while loop


} //close if statement

?>
</main>

<aside>

</aside>

</div><!--end wrapper from header.php-->

<?php

include('./includes/footer.php'); 