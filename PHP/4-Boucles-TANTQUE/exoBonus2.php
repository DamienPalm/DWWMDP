<?php

$nb = readline("mettre un nombre ");
$compteur = 2;
$factorielle = 1;

while ($compteur <= $nb){
    $factorielle = $factorielle * $compteur;
    $compteur = $compteur + 1;
}

echo "La factorielle de " . $nb . " est de : " . $factorielle . "\n";
?>