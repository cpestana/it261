<?php
ob_start();


$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$plant = ''; 
$pot_size = ''; 
$climate = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$plant_err = '';
$pot_size_err = ''; 
$climate_err = ''; 
$comments_err = '';
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

    //if (empty($_POST['phone'])) {
    //    $phone_err = 'Please enter your phone number!';
    //} else {
     //   $phone = $_POST['phone'];
    //}
    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

    if (empty($_POST['plant'])) {
        $plant_err = 'Please let us know what plant you are looking for!';
    } else {
        $plant = $_POST['plant'];
    }

    if (empty($_POST['climate'])) {
        $climate_err = 'Please select your climate!';
    } else {
        $climate = $_POST['climate'];
    }

    if ($_POST['pot_size'] == null) {
        $pot_size_err = 'What size pot do you need?';
    } else {
        $pot_size = $_POST['pot_size'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Agree if you want the plants!';
    } else {
        $privacy = $_POST['privacy'];
    }
    //end error handling

    // climate function 
    function climate($climate){
        $climate_return = '';
        if (!empty($_POST['climate'])) {
            $climate_return = implode('', $_POST['climate']);
        }
        return $climate_return;
    }
    //end of function
   
    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['pot_size'],
        $_POST['climate'],
        $_POST['comments'],
        $_POST['privacy']
    )) {

        $to = 'clpestanaa@gmail.com';
        $subject = 'Test Email,' . date('m/d/y, h i A');
        $body = '
        First Name: ' .$first_name. '' . PHP_EOL . '
        last Name: ' .$last_name. '' . PHP_EOL . '
        pot_size: ' .$pot_size. '' . PHP_EOL . '
        climate: ' .climate($climate). '' . PHP_EOL . '
        Phone: ' .$phone. '' . PHP_EOL . '
        Email: ' .$email. '' . PHP_EOL . '
        plant: ' .$plant. '' . PHP_EOL . '
        Comments: ' .$comments. '' . PHP_EOL . '
        ';

        $headers = array(
            'From' => 'noreply@christinepestana.com', 
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thanx.php');

       // if(!empty($first_name &&
           //      $last_name &&
           //      $email &&
            //     $phone &&
            //     $pot_size &&
            //     $plant &&
             //    $climate &&
               //  $comments &&
             //    $privacy) && 
             //    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', 
             //    $_POST['phone'])){

    } // close if not empty statement

    } //close isset

 //} // End Server method */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="website/css/styles.css" rel="stylesheet" type="text/css">
    </link>
</head>

<body>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <fieldset>
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                    <span class="error"><?php echo $first_name_err; ?></span>

                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                    <span class="error"><?php echo $last_name_err; ?></span>

                    <label for="email">Email:</label>
                    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    <span class="error"><?php echo $email_err; ?></span>

                    <label for="phone">Phone</label>
                   <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) {
                    echo htmlspecialchars($_POST['phone']);
                    } ?>">
                  <span class="error">
                    <?php echo $phone_err; ?>
                 </span>

                    <label for="plant">Favorite Plant (Choose one):</label>
                    <ul>
                        <li><input type="radio" name="plant" value="ferns" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'ferns') echo 'checked="checked"' ;?>>Ferns</li>
                        <li><input type="radio" name="plant" value="yucca" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'yucca') echo 'checked="checked"' ;?>>Yucca</li>
                        <li><input type="radio" name="plant" value="lavender" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'lavender') echo 'checked="checked"' ;?>>Lavender</li>
                        <li><input type="radio" name="plant" value="gaillardia" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'gaillardia') echo 'checked="checked"' ;?>>Gaillardia</li>
                        <li><input type="radio" name="plant" value="hair_grass" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'hair_grass') echo 'checked="checked"' ;?>>Hair Grass</li>
                        <li><input type="radio" name="plant" value="other" <?php if(isset($_POST['plant']) && $_POST['plant'] == 'other') echo 'checked="checked"' ;?>>Other (Please let us know your favorite plant in the comments!)</li>
                    </ul>
                    <span class="error"><?php echo $plant_err; ?></span>

                    <label for="pot_size">Pot size (inches):</label>
                    <select name="pot_size">
                        <option value="" NULL <?php if(isset($_POST['pot_size']) && $_POST['pot_size'] == NULL) echo 'selected'; ?>>Select size</option>
                        <?php
                            for ($x = 4; $x <= 30; $x++) {
                                echo '<option value="'.$x.'" ';
                                if(isset($_POST['pot_size']) && $_POST['pot_size'] == $x){
                                    echo 'selected>'.$x.'</option>';
                                }else{
                                    echo '>'.$x.'</option>';
                                }
                            } 
                        ?>
                    </select>
                    <span class="error"><?php echo $pot_size_err;?></span>

                    <label for="climate">Climate:</label>
                    
                    <ul>
                        <li><input type="checkbox" name="climate[0]" value="tropical" <?php if(isset($_POST['climate']) && in_array('tropical',$climate)) echo 'checked="checked"';?>>Tropical</li>
                        <li><input type="checkbox" name="climate[1]" value="dry" <?php if(isset($_POST['climate']) && in_array('dry', $climate)) echo 'checked="checked"'; ?>>Dry</li>
                        <li><input type="checkbox" name="climate[2]" value="temperate" <?php if(isset($_POST['climate']) && in_array('temperate', $climate)) echo 'checked="checked"'; ?>>Temperate</li>
                        <li><input type="checkbox" name="climate[3]" value="continental" <?php if(isset($_POST['climate']) && in_array('continental', $climate)) echo 'checked="checked"'; ?>>Contintental</li>
                        <li><input type="checkbox" name="climate[3]" value="polar" <?php if(isset($_POST['climate']) && in_array('polar', $climate)) echo 'checked="checked"'; ?>>Polar</li>
                    </ul>
 

                    <label for="comments">Comments</label>
                    <textarea name="comments" ><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
                    <span class="error"><?php echo $comments_err;?></span>

                    <label for="privacy">Privacy</label>
                    <ul>
                        <li><input type="radio" name="privacy" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';?>>I agree to this</li>
                    </ul>
                    <span class="error"><?php echo $privacy_err;?></span>
                    
                    <input type="submit" value="Submit">
                    <p><a href="">Reset</a></p>        
                </fieldset>
            </form>
</body>
</html>