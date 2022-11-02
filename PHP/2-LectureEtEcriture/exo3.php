<?php

$PxHT = readline("Prix HT");
$Quantite = readline("Nombre d'article");
$PxTTC = $PxHT * $Quantite * (1+20/100);

echo "Le prix TTC est :" . $PxTTC;

?>