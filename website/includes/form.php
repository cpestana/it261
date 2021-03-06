
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
