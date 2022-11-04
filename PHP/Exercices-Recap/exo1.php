<?php

$nb = readline("Choisir un nombre entre 1 et 20 ");

while ($nb < 1 || $nb > 20){
    $nb = readline("Choisir un nombre entre 1 et 20 ");
}

if ($nb >= 16){
    echo "Votre nombre est compris entre 16 et 20";
}

elseif ($nb >= 11){
    echo "Votre nombre est compris entre 11 et 15";
}

elseif ($nb >= 6){
    echo "Votre nombre est compris entre 6 et 10";
}

elseif ($nb >= 1){
    echo "Votre nombre est compris entre 1 et 5";
}

?>