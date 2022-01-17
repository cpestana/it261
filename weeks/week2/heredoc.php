<?php

$book = 'Breaking and Entering'; 
$author = 'Joy Williams'; 
$actor = 'Laura Dern';
$character = 'Liberty';

$content = '<p>My favorite book is <b>'.$book.'</b>, written by '.$author.'
It is about a couple and their dog who break into Florida vacation homes
while the wealthy owners are away. The couple are not homeless and actually rent a smaller home, nothing fancy. 
It\'s one of those books you can get lost in, with lots of adventure and interesting characters the couple meet. Sometimes I yell at the page telling 
them to stop because they are going to get caught! It is not necessarily a political book, but it makes you ponder capitalism and waste. 
It\'s just really great fiction. </p>

<p>This was never made into a film, but I imagine a great actor to play '.$character.' would be 
'.$actor.' </p>'; 

echo $content; 



$new_content = <<<BREAKING
<p>My favorite book is $book, written by $author
It is about a couple and their dog who break into Florida vacation homes
while the wealthy owners are away. The couple are not homeless and actually rent a smaller home, nothing fancy. 
It\'s one of those books you can get lost in, with lots of adventure and interesting characters the couple meet. Sometimes I yell at the page telling 
them to stop because they are going to get caught! It is not necessarily a political book, but it makes you ponder capitalism and waste. 
It\'s just really great fiction.</P>

<p>This was never made into a film, but I imagine a great actor to play $character would be 
$actor.</p>
BREAKING; 

echo $new_content; 