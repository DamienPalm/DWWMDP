<?php

$nb = readline("Combien d'élément souhaitez vous saisir ? ");
$tab = [];
$estVrai = false;
for ($i = 0; $i < $nb; $i++) {
    $saisie = readline("Saisir les éléments du tableau : ");
    $tab[$i] = $saisie;
}

for ($i=0;$i<=count($tab)-2;$i++){

    if ($tab[$i] == $tab[$i+1]){
        $temp = $tab[$i];
        $tab[$i] = $tab[$i+1];
        $tab[$i+1] = $temp;
        echo "doublon";
        $estVrai = true;
    }
}

if ($estVrai == false){
    echo "pas de doublon";
}
?>