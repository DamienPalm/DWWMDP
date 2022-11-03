<?php

$jour = readline("jour");
$mois = readline("mois");
$annee = readline("année");

if ($annee % 4 == 0 && $annee % 100 != 0 || $annee % 400 == 0){
    echo "année bissextile";
}
else{
    echo "année non bissextile";
}

?>