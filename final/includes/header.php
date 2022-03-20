  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<header>
    <div class="header-inner">
    <img src="images/englandlogo.png" height="80px" width="80px" alt="england-flag-logo">
</div>
    <nav>
    <ul id="menu" class ="menu">
                <?php 
                echo create_nav($nav); 
                ?>
   
    </ul>
    </nav>

    
   

</header>
    


