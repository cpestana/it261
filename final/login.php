
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<?php
// login.php page
// input fields for username and password

include('server.php');


?>
<div id="wrapper-login">

<h1 id="login-h1" class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method="post" >
    <fieldset>
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ;?>
">
        <label for="password">Password</label>
        <input type="password" name="password">

        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' ">Reset</button>

        <?php
        include('errors.php');
        ?>
    </fieldset>
</form>
    <div id="register">
    <h3>Not a member?</h3>
    <span class="block"><a href="register.php">Register here!</a></span>
</div>

</div><!--close div-->
<?php
include('includes/footer.php'); 