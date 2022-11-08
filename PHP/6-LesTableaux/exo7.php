<?php

$prix = [5, 50, 23, 11];
$quantites = [10, 1, 4, 3];
$tab = [];
$prixTotal = 0;

for ($i = 0 ; $i < count($prix); $i++){
    $tab [$i] = $prix [$i] * $quantites [$i];
}
echo "Le Prix total est de : " . $prixTotal = array_sum($tab);

?>