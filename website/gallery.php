
   
<?php
include('config.php');
include('includes/header.php'); ?>

<?php
$people['palos_verdes_blue'] = 'palos_verdes_blue<b>Palos Verdes Blue Butterly</b> This little butterfly with its cerulean blue wings and body is in competition with the Miami blue to be the rarest butterfly in the world. A subspecies of the silvery blue, it is found in California’s Palos Verdes Peninsula. One reason for its endangered status is that it uses only the common deer weed as a host plant, and this plant has become scarce as its habitat is being converted into housing.';
$people['island_marble'] = 'island_marble<b>Island Marble Butterfly</b>The Island Marble’s wings have a fascinating color scheme of marbled green and white, and it feeds on the flowers of the wild mustard. It has a wingspan of between 1.5 and 2 inches, and the caterpillar is about 3/4 of an inch long. It’s green or blue-gray and dotted in black with white with yellow stripes down its back and sides. ';
$people['queen_alexandria_birdwing'] = 'queen_alexandria_birdwing<b>Queen Alexandria Birdwing Butterfly</b>Named after a Queen of England, the females of this huge butterfly can have a wingspan of between 9.8 and 11 inches and weigh as much as 0.42 ounces. Their wings are brown and white, but the smaller males are sparkling blue-green and banded in black, with a green or blue-green underside. This butterfly is only found in Papua New Guinea’s Oro Province. Because it is so rare and endangered, the trade in these butterflies is illegal.';
$people['blue_morpho'] = 'blue_morpho<b>Blue Morpho Butterfly</b> The blue morpho feeds on the juices of rotting fruit. The red and green caterpillar is nocturnal and fond of the leaves of Erythroxylum and members of the pea family. This butterfly is endangered due to habitat loss and collection.';
$people['zebra_longwing'] = 'zebra_longwing<b>Zebra Longwing Butterfly</b> The coloration of this butterfly reminds people of the black and white stripes of a zebra even though if you look closely there are red spots at the base of the wings, which have a span of 2.8 to 3.9 inches. It is native to South and Central America and can be found in some parts of the southern United States. This makes its range unusually large for a butterfly. The zebra longwing roosts in large groups to protect against predators.';

// $name                      $image
// $key                         $table
?>
<div id="wrapper">

    <table>
        <?php foreach($people as $name => $image) : ?>
            <tr>
                <td><img src="photos/<?php echo substr($image, 0, 3) ; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ; ?>"></td>
                <td><?php echo str_replace('_', ' ', $name) ; ?></td>
                <td><?php echo substr($image, 4); ?></td>
                <td><img src="photos/<?php echo substr($image, 0, 4) ; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
include('includes/footer.php');