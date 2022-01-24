<?php//adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added ". $num1 ." and .$num2. '"';
echo ' <p> and the answer is <br>
<style="color:red;">" $myTotal ."!"</p>;
echo'<p><a href="">Reset page</a>'
}
<html>
    <head>
        <title>My Adder Assignment</title>
        <style>
        </style>
    </head>
<body>
    <h1>Adder.php</h1> <\form action="">
    Enter the first number:</label><input type="text" name="Num1"><br>
    </label>Enter the second number:<input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!> </form>

<!--here are my errors--> 
<!--assignment wrong on line 6, changed from "-=" to "="-->
<!--Line 6 again had capital N in Num2, changed to num2-->


</body>
</html>';{?>