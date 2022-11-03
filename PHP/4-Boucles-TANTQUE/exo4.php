<?php

$nb1 = readline("nombre 1 ");
$nb2 = readline("nombre 2 ");
$reste;

if ($nb1 > $nb2){
    $reste = $nb1 % $nb2;
}

while ($reste != 0){
    $reste = $nb1 % $nb2;
    $nb1 = $nb2;
    $nb2 = $reste;
}

echo "Le PGCD vaut : " . $nb1;

?>