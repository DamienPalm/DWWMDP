<?php

$nb = readline("mettre un nombre ");
$compteur = 0;

while ($compteur < 10){
    $compteur = $compteur + 1;
    echo $nb*$compteur . "\n";
}

?>