<?php
//We have travelled the world and have difference currency that we need to exchange
//canada - .80
//rubles - 0.013
//pounds - 1.37
//euros - 1.14
//yen - 0.0087
//we have 2000 canadian, rubles, etc. 



$canadian = 2000; 
$canadian *= .80; 

$canadian_rate = .80; 
$canadian_dollars = 2000*$canadian_rate; 

$rubles_rate = .013; 
$rubles_dollars = 2000*$rubles_rate; 

$pounds_rate = 1.37; 
$pounds_dollars = 2000*$pounds_rate; 

$euros_rate = 1.14 ;
$euros_dollars = 2000*$euros_rate; 

$yen_rate = .0087;
$yen_dollars = 2000*$yen_rate; 

?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Currency Logic</title>
    <style>
        table {
            width:400px; 
            margin:0 auto;
            border:1px solid red; 
            border-collapse: collapse; 
        }

        th {
            font-size:2em; 
            padding:10px; 
        }

        td {
            border: 1px solid red; 
            padding: 10px;
            font-size:1.2em; 
    
        }

        h1, h2 {
            text-align:center; 
        }

    </style>

    </head>
    <body>
        <h1>My Currency Tables</h1>

        <h2>Table 1</h2>
        <table>
            <tr>
        <th>Currency</th>
        <th>US Dollars</th>
            </tr>

    <tr>
        <td>Rubles</td>
        <td><?php echo number_format($rubles_dollars, 2);  ?>
        </td>
    </tr>
    <tr>
        <td>Canadian Dollar</td>
        <td><?php echo number_format($canadian_dollars, 2);  ?>
    </td>
    </tr>

    <tr>
        <td>Pounds</td>
        <td><?php echo number_format($pounds_dollars, 2);  ?>
    </td>
    </tr>

    <tr>
        <td>Euros</td>
        <td><?php echo number_format($euros_dollars, 2);  ?>
    </td>
    </tr>

    <tr>
        <td>Yen</td>
        <td><?php echo number_format($yen_dollars, 2);  ?>
    </td>
    </tr>




    </table>
    </body>
    </hmtl>



 