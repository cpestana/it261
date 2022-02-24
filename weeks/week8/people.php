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

?>
</main>

<aside>

</aside>

</div><!--end wrapper from header.php-->

<?php

include('./includes/footer.php'); 