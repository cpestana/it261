<?php
include('config.php'); 
//people-view.php
//if id has been set

if(isset($_GET['id'])) {
$id = (int)$_GET['id']; 
} else {
    header('Location:people.php'); 
}

// we have to select from the table and make sure that
// people_id = $id

$sql = 'SELECT * FROM people WHERE people_id = '.$id.''; 

// we will place all of the php here BEFORE we call out the header.php



include('./includes/header.php'); 
?>
<main>
    <h1>Welcome to our People View Page!</h1>

</main>
<aside>
<h3>We will display image of politician on this page.</h3>
</aside>

</div><!--end wrapper from header.php-->

<?php

include('./includes/footer.php'); 