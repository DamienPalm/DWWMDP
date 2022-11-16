<?php

$nb1 = readline ("Entrez un nombre : ");
$nb2 = rand (101, 999);
$i=0;

do {
    $i++;
    echo "******************** essai n°" . $i . " ********************" . "\n" . $nb2 = rand (101, 999) . "\n";
}
while ($nb1 != $nb2)

?>