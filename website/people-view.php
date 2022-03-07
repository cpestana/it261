<?php
include('config.php'); 
//people-view.php
//if id has been set

if(isset($_GET['id'])) {
$id = (int)$_GET['id']; 
} else {
    header('Location: project.php'); 
}

// we have to select from the table and make sure that
// people_id = $id

$sql = 'SELECT * FROM gryffindor WHERE gryffindor_id = '.$id.''; 

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
// before we copy and paste while loop, we cannot output anything here
while($row = mysqli_fetch_assoc($result)){
$first_name = stripslashes($row['first_name']);
$last_name = stripslashes($row['last_name']);   
$details = stripslashes($row['details']);
$feedback = '';
} //closing while loop

} else {//closing if mysqli_num rows
$feedback = 'Houston, we have a problem!'; 

} //closing else

// we will place all of the php here BEFORE we call out the header.php



include('./includes/header.php'); 
?>

<main>
    <h1>House of Gryffindor</h1>
    <h2>Welcome to <?php echo ''.$first_name.' '.$last_name.'' ;?>'s Page!</h2>
    <ul>
        <?php
        echo'
        <li><b>First Name:</b> '.$first_name.'</li>
        <li><b>Last Name:</b> '.$last_name.'</li>
        <li>
        <p>'.$details.'</p>
        </li>
    ';
    ?>
    </ul>
    <p><a href="project.php">Return to the project.php page!</a></p>
</main>
<aside>
    <figure>
        <img src="people/<?= $id ?>.jpg" alt="<?= $first_name ?>">
        <figcaption><?php echo ''.$first_name.' '.$last_name.', '.$details.' ';?></figcaption>
    </figure>



</aside>

</div><!--end wrapper from header.php-->

<?php



include('./includes/footer.php'); 