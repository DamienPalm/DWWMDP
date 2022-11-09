<?php

$nb = readline ("Nombre de valeurs que vous souhaitez enregistrer : ");
$tab = [];

for ($i = 0 ; $i < $nb ; $i++){
    $saisie = readline ("valeur : ");
    $tab [$i] = $saisie;
}

for ($i = 0 ; $i < $tab[$i]-1 ; $i++){
    $min = $i;
    for ($j = 0 ; $i+1 < $tab[$i] ; $j++){
        if ($tab[$j] < $tab[$min]){
            $min = $j;
            $temp = $tab[$min];
            $tab[$min] = $tab[$i];
            $tab[$i] = $temp;
        }
    }  
}

foreach($tab as $valeur){
    echo $valeur . "\n";
}

?>