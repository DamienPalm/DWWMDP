<?php

$nb1 = readline("nombre 1 ");
$nb2 = readline("nombre 2 ");
$nb3 = $nb1;
$nb4 = $nb2;
$reste;
$ppcm;

if ($nb1 > $nb2){
    $reste = $nb1 % $nb2;
}

while ($reste != 0){
    $reste = $nb1 % $nb2;
    $nb1 = $nb2;
    $nb2 = $reste;
}

echo "Le PGCD vaut : " . $nb1 . "\n";

$ppcm = ($nb3 * $nb4) / $nb1;
echo "Le PPCM vaut : " . $ppcm;

?>