<?php

$nb = readline ("Nombre de valeurs que vous souhaitez enregistrer : ");
$val = [];
$valPositive = 0;
$valNegative = 0;

for ($i = 1 ; $i <= $nb ; $i++){
    $saisie = readline ("valeur : ");
    $val [$i] = $saisie;
    if ($val [$i] > 0){
        $valPositive++;
    }
     elseif ($val [$i] < 0){
        $valNegative++;
    }
}

echo "Il y a : " . $valPositive . " valeurs positives" . "\n" . 
"Il y a : " . $valNegative . " valeurs négatives";

?>