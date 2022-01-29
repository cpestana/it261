
<html>
    <head>
        <title>My Adder Assignment</title>
        <style>
        </style>
    </head>
<body>
    <h1>Adder.php</h1> 
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!"> 
    </form>

<?php 
// adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p style="color:red;"> and the answer is <br>
 '.$myTotal .' !</p>';
echo'<p><a href="">Reset page</a></p>';
}; 
?>

<!--here are my errors--> 
<!--HTML is unorganized, so organized it and added it before php-->
<!--assignment wrong on line 6, changed from "-=" to "="-->
<!--Line 10, opening form tag is a close tag-->
<!--Line 10, form missing the method-->
<!--Line 11, missing opening label tag-->
<!--Line 13, close tag is in opening tag area for label-->
<!--Line 15, missing closing quotes for add em-->
<!--Line 24, had capital N in Num2, changed to num2-->
<!--Line 25, missing closing h2 tag-->
<!--Line 25, changed double quotes to single-->
<!--Line 25, num2 missing single quote-->
<!--Line 26, the inline style tags need to be moved to <p>-->
<!--Line 27, double quotes are being used in myTotal-->
<!--Line 27, missing period to embed myTotal-->
<!--Line 28, missing the closing <p> tag (</p>)-->
<!--Line 29, closing bracket missing semi-colon-->
<!--missing closing php tag-->
<!--';{? was on the last line, did not make sense-->

</body>
</html>
