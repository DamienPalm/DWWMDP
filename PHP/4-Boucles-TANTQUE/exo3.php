<?php

$nb = readline("mettre un nombre ");
$compteur = $nb;

while ($compteur < $nb + 10){
    $compteur = $compteur + 1;
    echo $compteur . "\n";
}

?>