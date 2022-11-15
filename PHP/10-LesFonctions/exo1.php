<?php

require "Fonction.php";

$PxHT = readline("Prix HT : ");
$Quantite = readline("Nombre d'article : ");

echo pxTTC ($PxHT, $Quantite) . "€";

?>