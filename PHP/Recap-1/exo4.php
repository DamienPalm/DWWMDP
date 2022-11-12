<?php

$compteur = 1;
$nb = readline("Choisir un nombre pair et divisible par 3 : ");

while (($nb % 2 > 0) || ($nb % 3 > 0)){
    $compteur = $compteur + 1;
    
    if ($nb % 2 >= 1){
         echo ("Le nombre n'est pas pair ! ") . "\n";       
    }
    
    if ($nb % 3 >= 1){
        echo ("Le nombre n'est pas divisible par 3 ! ") . "\n";
    }
    
    echo ("**********Essai numéro " . $compteur . "**********") . "\n";
    $nb = readline("Choisir un nombre pair et divisible par 3 : ");
}

echo "**********************************" . "\n";
echo "Le nombre " . $nb . " est pair et divisible par 3 !!!";
?>