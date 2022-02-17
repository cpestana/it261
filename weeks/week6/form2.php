<?php
ob_start();

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$phone = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$wines_err = '';
$comments_err = '';
$regions_err = '';
$phone_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your First Name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your Last Name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email.';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Choose your gender.';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['wines'])) {
        $wines_err = 'What..no wines..???';
    } else {
        $wines = $_POST['wines'];
    }

    if ($_POST['regions'] == null) {
        $regions_err = 'Please select your region.';
    } else {
        $regions = $_POST['regions'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = 'Please enter your phone number!';
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    // our wines function 
    function my_wines($wines)
    {
        $my_return = '';
        if (!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_err = 'Please check your wines'; 
        }
        return $my_return;
    }
    //end of function
   
    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['phone'],
        $_POST['privacy']
    )) {

        $to = 'clpestanaa@gmail.com';
        $subject = 'Test Email,' . date('m/d/y, h i A');
        $body = '
        First Name: ' . $first_name . '' . PHP_EOL . '
        last Name: ' . $last_name . '' . PHP_EOL . '
        Gender: ' . $gender . '' . PHP_EOL . '
        Region: ' . $regions . '' . PHP_EOL . '
        Phone: ' . $phone . '' . PHP_EOL . '
        Email: ' . $email . '' . PHP_EOL . '
        Wines: ' . my_wines($wines) . '' . PHP_EOL . '
        Comments: ' . $comments . '' . PHP_EOL . '
        ';

        if(!empty($first_name &&
                 $last_name &&
                 $email &&
                 $gender &&
                 $wines &&
                 $regions &&
                 $comments &&
                 $phone &&
                 $privacy )) {

       $headers = array(
           'From' => 'noreply@gmail.com', 
           'Reply to:' => ''.$email.'', 
       ); 
       
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');

    } // close if not empty statement

    } //close isset

} // End Server method

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form Number 1</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    </link>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) {
    echo htmlspecialchars($_POST['first_name']);
}

?>">
            <!-- sticky -->

            <span class="error">
                <?php echo $first_name_err; ?>
            </span>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) {
    echo htmlspecialchars($_POST['last_name']);
}

?>">
            <span class="error">
                <?php echo $last_name_err; ?>
            </span>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}

?>">
            <span class="error">
                <?php echo $email_err; ?>
            </span>

            <label for="phone">Phone</label>
            <input type="text" name="phone" value="<?php if (isset($_POST['phone'])) {
    echo htmlspecialchars($_POST['phone']);

}

?>">
            <span class="error">
                <?php echo $phone_err; ?>
            </span>

            <label for="gender">Gender</label>
    
    <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') {
     echo 'checked="checked"';
 }
 ?>> Female</li>
 
    <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') {
     echo 'checked="checked"';
 }
 ?>> Male</li>
 
             
     <li><input type="radio" name="gender" value="neither" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither') {
     echo 'checked="checked"';
 }
 ?>> Neither</li>
    
             
             <span class="error">
                 <?php echo $gender_err; ?>
             </span>

 <label for="wines">Favorite Wines</label>

            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines)) {
    echo 'checked="checked"';
}
?>>Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines)) {
    echo 'checked="checked"';
}?>>Merlot</li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines)) {
    echo 'checked="checked"';
}?>>Malbec</li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines)) {
    echo 'checked="checked"';
}?>>Syrah</li>
                
            </ul>
            <span class="error">
                <?php echo $wines_err; ?>
            </span>

            <label for="regions">Region</label>
            <select name="regions" id="">
                <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == NULL) {
    echo 'selected="unselected"';
}?>>Select One</option>
                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw') {
    echo 'selected="unselected"';
}?>>Northwest</option>
                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw') {
    echo 'selected="unselected"';
}?>>Southwest</option>
                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw') {
    echo 'selected="unselected"';
}?>>Midwest</option>
                <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ne') {
    echo 'selected="unselected"';
}?>>Northeast</option>
                <option value="se" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'se') {
    echo 'selected="unselected"';
}?>>Southeast</option>
                <option value="so" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'so') {
    echo 'selected="unselected"';
}?>>Southern</option>
                <option value="no" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'no') {
    echo 'selected="unselected"';
}?>>Northern</option>

                <span class="error">
                    <?php echo $regions_err; ?>
                </span>

<label>Comments</label>
                <textarea
                    name="comments"><?php if (isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']) ;}?></textarea>
                <span class="error">
                    <?php echo $comments_err; ?>
                </span>

                <label for="privacy">Privacy</label>
                <ul>
                    <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'agree') {
    echo 'checked="checked"';
}
?>>You must agree</li>
                </ul>
                <span class="error">
                    <?php echo $privacy_err; ?> </span>
                <input type="submit" value="Send It">
                <p><a href="">Reset</a></p>
            </select>
        </fieldset>
    </form>


</body>

</html>