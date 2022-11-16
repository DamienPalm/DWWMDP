<?php

$nb1 = readline ("Entrez un nombre : ");
$nb2 = rand (101, 999);

for ($i = 1 ; $nb1 != $nb2 ; $i++){
    echo "******************** essai n°" . $i . " ********************" . "\n" . $nb2 = rand (101, 999) . "\n";
}

?>