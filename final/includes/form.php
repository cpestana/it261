
 <?php 
   include ('config.php'); 
   
   
   ?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <fieldset>
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                    <span class="error"><?php echo $first_name_err; ?></span>

                    <labsel for="last_name"><b>Last Name:</b></label>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                    <span class="error"><?php echo $last_name_err; ?></span>

                    <label for="email">Email:</label>
                    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    <span class="error"><?php echo $email_err; ?></span>

                    <label for="phone">Phone Number</label>
                    <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" value="<?php echo $sticky_phone;?>">
                    <span class="error"><?php echo $phone_err;?></span>

                    <label for="city">Favorite City in England (Choose one):</label>
                    <ul>
                        <li><input type="radio" name="city" value="bath" <?php if(isset($_POST['city']) && $_POST['city'] == 'bath') echo 'checked="checked"' ;?>>Bath</li>
                        <li><input type="radio" name="city" value="birmingham" <?php if(isset($_POST['city']) && $_POST['city'] == 'birmingham') echo 'checked="checked"' ;?>>Birmingham</li>
                        <li><input type="radio" name="city" value="brighton" <?php if(isset($_POST['city']) && $_POST['city'] == 'brighton') echo 'checked="checked"' ;?>>Brighton</li>
                        <li><input type="radio" name="city" value="bristol" <?php if(isset($_POST['city']) && $_POST['city'] == 'bristol') echo 'checked="checked"' ;?>>Bristol</li>
                        <li><input type="radio" name="city" value="canterbury" <?php if(isset($_POST['city']) && $_POST['city'] == 'canterbury') echo 'checked="checked"' ;?>>Canterbury</li>
                        <li><input type="radio" name="city" value="liverpool" <?php if(isset($_POST['city']) && $_POST['city'] == 'liverpool') echo 'checked="checked"' ;?>>Liverpool</li>
                        <li><input type="radio" name="city" value="london" <?php if(isset($_POST['city']) && $_POST['city'] == 'london') echo 'checked="checked"' ;?>>London</li>
                        <li><input type="radio" name="city" value="Manchester" <?php if(isset($_POST['city']) && $_POST['city'] == 'Manchester') echo 'checked="checked"' ;?>>Manchester</li>
                        <li><input type="radio" name="city" value="Nottingham" <?php if(isset($_POST['city']) && $_POST['city'] == 'Nottingham') echo 'checked="checked"' ;?>>Nottingham</li>
                        <li><input type="radio" name="city" value="york" <?php if(isset($_POST['city']) && $_POST['city'] == 'york') echo 'checked="checked"' ;?>>York</li>
                    </ul>
                    <span class="error"><?php echo $city_err; ?></span>


                    <label for="view">View</label>
            <select name="view" id="">
                <option value="" NULL <?php if (isset($_POST['view']) && $_POST['view'] == NULL) {
    echo 'selected="unselected"';
}?>>Select One</option>
                <option value="city" <?php if (isset($_POST['view']) && $_POST['view'] == 'city') {
    echo 'selected="unselected"';
}?>>City</option>
                <option value="mountain" <?php if (isset($_POST['view']) && $_POST['view'] == 'mountain') {
    echo 'selected="unselected"';
}?>>Mountain</option>
                <option value="park" <?php if (isset($_POST['view']) && $_POST['view'] == 'park') {
    echo 'selected="unselected"';
}?>>Park</option>
                <option value="water" <?php if (isset($_POST['view']) && $_POST['view'] == 'water') {
    echo 'selected="unselected"';
}?>>Water</option>

                <span class="error">
                    <?php echo $view_err; ?>
                </span>


                    <label for="type">Home Type:</label>
                    
                    <ul>
                        <li><input type="checkbox" name="type[0]" value="flat" <?php if(isset($_POST['type']) && in_array('flat',$type)) echo 'checked="checked"';?>>Flat</li>
                        <li><input type="checkbox" name="type[1]" value="semi-detached" <?php if(isset($_POST['type']) && in_array('semi-detached', $type)) echo 'checked="checked"'; ?>>Semi-Detached</li>
                        <li><input type="checkbox" name="type[2]" value="detached" <?php if(isset($_POST['type']) && in_array('detached', $type)) echo 'checked="checked"'; ?>>Detached</li>
                    </ul>
                    <span class="error">
                    <?php echo $type_err; ?>
                    </span>
 

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
