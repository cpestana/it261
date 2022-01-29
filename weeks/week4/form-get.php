<?php
// this is our first form
// we will be using the $_GET global variable

// our logic is : I will be asking for a first name and email in form

// if it is set, yippy skippy -- if not, show the form

if(isset($GET_['name'], 
        $_GET['email'])) {
$name = $GET_['name']; 
$email = $_GET['email']; 
} else {
echo '
<form action="" method="get">

<label>NAME</label>
<input type="text" name="name">

<label>EMAIL</label>
<input type="email" name="email">

<input type="submit" value="confirm">

</form>
'; 

}

?>