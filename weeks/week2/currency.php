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

$rubles = 4000; 
$rubles *= 0.013; 

$pounds = 5500; 
$pounds *= 1.37; 

$euros = 1400; 
$euros *= 1.14; 

$yen = 2000; 
$yen *= 0.0087; 

$total = $canadian + $rubles + $pounds + $euros + $yen 

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
        <td>Canadian</td>
        <td><?php echo number_format($canadian, 2);?></td>
        </tr>

        <tr>
        <td>Rubles</td>
        <td><?php echo number_format($rubles, 2);?></td>
        </tr>

        <tr>
        <td>Pounds</td>
        <td><?php echo number_format($pounds, 2);?></td>
        </tr>

        <tr>
        <td>Euros</td>
        <td><?php echo number_format($euros, 2);?></td>
        </tr>

        <tr>
        <td>Yen</td>
        <td><?php echo number_format($yen, 2);?></td>
        </tr>

        <tr>
            <td><b>Total</b></td>
            <td><?php echo'<b>$'.number_format($total, 2).' US Dollars </b>';?></td>
        </tr>

    </table>

    </body>
    </hmtl>



 