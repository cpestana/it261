<?php
include('config.php'); 
include('./includes/header.php'); 

//people-view.php
//if id has been set

if(isset($_GET['id'])) {
$id = (int)$_GET['id']; 
} else {
    header('Location: england-cities.php'); 
}

// we have to select from the table and make sure that
// people_id = $id

$sql = 'SELECT * FROM england WHERE england_id = '.$id.''; 

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
// before we copy and paste while loop, we cannot output anything here
while($row = mysqli_fetch_assoc($result)){
$city_name = stripslashes($row['city_name']);
$avg_rental_price = stripslashes($row['avg_rental_price']);   
$details = stripslashes($row['details']);
$feedback = '';
} //closing while loop

} else {//closing if mysqli_num rows
$feedback = 'Houston, we have a problem!'; 

} //closing else

// we will place all of the php here BEFORE we call out the header.php

?>

<main>
    <h1>Most Exciting Cities in England!</h1>
    <h2>Welcome to <?php echo ''.$city_name.'' ;?>!</h2>
    <ul>
        <?php
        echo'
        <li><b>City:</b> '.$city_name.'</li>
        <li><b>Average monthly price for a flat:</b> £'.$avg_rental_price .'</li>
        <li>
        <p>'.$details.'</p>
        </li>
    ';
    ?>
    </ul>
    <p><a href="england-cities.php">Return to British Cities!</a></p>
</main>
<aside>
    <figure>
        <img src="images/gryffindor<?= $id ?>.jpg" alt="<?= $city_name ?>">
        <figcaption><?php echo ''.$city_name.'';?></figcaption>
    </figure>



</aside>

</div><!--end wrapper from header.php-->

<?php



include('./includes/footer.php'); 