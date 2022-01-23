<?php
// this file will demonstrate for loops and 
//in addition to placing your php inside your html

//celcius and fahrenheiht
$celcius = 15; 
$far = ($celcius * 9/5) +32; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    *
    table {
        width: 300px; 
        margin: 20px auto; 
        border: 1px solid green; 
        border-collapse: collapse; 
    }
    td {
        border: 1px solid green; 
    }
    </style>
</head>
<body>
<h1>My two tables using the for-loop </h1>
<h2>Celcius/Fahrenheiht Table </h2>
<table>
<tr>
<th>celcius</th>
<th>fahrenheiht</th>
</tr> 
<?php
    for($cel = 0; $cel <=100; $cel +=5) {
        $far = ($cel * 9/5) +32; 
        echo '<tr>'; 
        echo '<td>'.@$cel.' degrees </td>'; 
        echo '<td> '.@$far.' degrees </td>'; 
        echo '</tr>'; 
    }
?>
</table>
<table>
<h2>Kilometers/Miles Table </h2>

<th>Kilometers</th>
<th>Miles</th>
</tr> 
<?php
    for($km = 0; $km <=100; $km +=5) {
        $mi = floor(($km * 1.60934)); 
        echo '<tr>'; 
        echo '<td>'.@$km.' Kilometers </td>'; 
        echo '<td> '.@$mi.' Miles </td>'; 
        echo '</tr>'; 
    }
?>
</table>

</body>
</html>
