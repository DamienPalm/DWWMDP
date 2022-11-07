<?php

$nb = (int) readline ("Saisir un nombre : ");
$factorielle = 1;

for ($i=2 ; $i <= $nb ; $i++){
    $factorielle = $factorielle * $i;
}

echo "La factorielle de " . $nb . " vaut : " . $factorielle . "\n";

?>