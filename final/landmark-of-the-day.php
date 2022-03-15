
   <?php 
   include ('config.php'); 
   include ('includes/header.php');
   
   ?>
   <div id="wrapper" class="<?php echo $bird; ?>">
        <main>
            <h1><?php echo $today; ?> is for <?php echo $bird; ?></h1>
            <p><?php echo $description; ?></p>
        </main>
        
        <aside>
            <div id="image">
                <img id="birdPhoto" src="<?php echo $photo; ?>" alt="<?php echo $alt; ?>" >
            </div>
            
        </aside>

        <div id="listWrapper">
            <h3>Daily Raptor Pages</h3>
            <ul>
                <?php 
                    foreach($day_array as $bird => $day){
                        echo '<li><a href="landmark-of-the-day.php?today='.$day.'">'.$bird.'</a></li>';
                    };
                ?>
            </ul>

        </div> <!--End listWrapper-->
<?php
include ('includes/footer.php');
?>