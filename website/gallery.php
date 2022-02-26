
   
<?php
include('config.php');
include('includes/header.php'); ?>

<?php
$people['Palos_Verdes_Blue'] = 'palos_<b> Palos Verdes Blue</b> This little butterfly with its cerulean blue wings and body is in competition with the Miami blue to be the rarest butterfly in the world.';
$people['Island_Marble'] = 'islan_<b>Island Marble</b> The Island Marble’s wings have a fascinating color scheme of marbled green and white, and it feeds on the flowers of the wild mustard. It’s green or blue-gray and dotted in black with white with yellow stripes down its back and sides. ';
$people['Queen_Alexandria_Birdwing'] = 'queen_<b> Queen Alexandria Birdwing</b> Their wings are brown and white, but the smaller males are sparkling blue-green and banded in black, with a green or blue-green underside. This butterfly is only found in Papua New Guinea’s Oro Province. Because it is so rare and endangered, the trade in these butterflies is illegal.';
$people['Blue_Morpho'] = 'bluem_<b>Blue Morpho</b> The blue morpho feeds on the juices of rotting fruit. The red and green caterpillar is nocturnal and fond of the leaves of Erythroxylum and members of the pea family. This butterfly is endangered due to habitat loss and collection.';
$people['Zebra_Longwing'] = 'zebra_<b>Zebra Longwing</b> The coloration of this butterfly reminds people of the black and white stripes of a zebra even though if you look closely there are red spots at the base of the wings. It is native to South and Central America and can be found in some parts of the southern United States.';

// variable key             value
// $name                    $images
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butterfly Gallery</title>
    <style>
table {
    border:2px solid blue; 
    border-collapse: collapse; 
}

td {
    border: 2px solid blue; 
}
    </style>
</head>
<body>
   
<table>
<?php foreach($people as $name => $image)  : ?>
<tr>
<td><img src="photos/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo $name ;?>"></td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>
<td><?php echo substr($image, 6) ;?></td>
</tr>
<?php endforeach ;?>
</table>



<?php
include('includes/footer.php');






