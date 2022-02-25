<?php
include('config.php'); 
include('./includes/header.php'); 
?>

<main>
<h1>Welcome to my people page</h1>
<?php
$sql = 'SELECT * FROM people'; 
//then we are going to connect to the database!
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql);

//we are asking if the number of rows is greater than zero, then we will be able to see the table --almost

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

echo '
<h2>Information about '.$row['first_name'].'</h2>
<ul>
<li><b>First Name:</b> '.$row['first_name'].'</li>
<li><b>Last Name:</b> '.$row['last_name'].'</li>
<li><b>Email:</b> '.$row['email'].'</li>
<li><b>Birthdate:</b> '.$row['birthdate'].'</li>
<li><b>Occupation:</b> '.$row['occupation'].'</li>
</ul>
<p>'.$row['details'].'</p>
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