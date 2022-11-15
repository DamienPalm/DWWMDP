<?php

require "Fonction.php";

$nb = readline("mettre un nombre ");
$i = 2;
$factorielle = 1;

echo "La factorielle de " . $nb . " est : " . factorielle($nb, $i, $factorielle);
?>