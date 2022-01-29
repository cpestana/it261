<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <title>Celcius Form</title>
    </head>
    <body class="celcius">
        <form action=
        "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="post">
            <fieldset>
                <legend>
                    Our Celsius Form
                </legend>
                <label for="cel">Enter Celsius Value:</label>
                <input type="number" name="cel">
                <input type="submit" value="Convert">
                <p><a href="">Reset</a></p>
            </fieldset>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['cel'])){
                $cel = $_POST['cel'];
                $cel_int = intval($cel);
                $far = round(($cel_int * 9/5) + 32);
                if($cel == NULL){
                    echo '<h3>Please enter the celsius value!</h3>';
                }elseif($far <= 32){
                    echo '<p>It is '.$far.' degrees fahrenheit and it is pretty cold!</p>';
                }elseif($far <= 40){
                    echo '<p>It is '.$far.' degrees fahrenheit and it is still pretty cold!</p>';
                }elseif($far<=50){
                    echo '<p>It is '.$far.' degrees fahrenheit and it is getting warmer</p>';
                }elseif($far <=60){
                    echo '<p>It is '.$far.' degrees fahrenheit and it is surely getting warmer! <br> No need for a winter coat!</p>';
                }elseif($far <=75){
                    echo '<p>It is '.$far.' degrees fahrenheit and is warmer!<br>And, I am reading in the park!</p>';
                }elseif($far <=90){
                    echo '<p>It is '.$far.' degrees fahrenheit and we are off to the beach!</p>';
                }else{
                    echo '<p>It is '.$far.' degrees fahrenheit and it\'s <b class="hot">really hot!!!</b></p>';
                }
            } //end isset
        }//end server post
        ?>
    </body>
</html>