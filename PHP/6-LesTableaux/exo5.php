<?php

$nb = readline ("Nombre de valeurs que vous souhaitez enregistrer : ");
$val = [];
$valmax = 0;

for ($i = 1 ; $i <= $nb ; $i++){
    $saisie = readline ("valeur : ");
    $val [$i] = $saisie;
    if ($valmax < $val [$i]){
        $valmax = $val [$i];
    }
}
$pos = array_search ($valmax, $val);
echo ($valmax) . " a été trouvé en position : " . ($pos);
?>