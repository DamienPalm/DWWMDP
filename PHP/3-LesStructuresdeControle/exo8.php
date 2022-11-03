<?php

$quantite = readline("Nombre photocopie");
$prix;

if($quantite >= 31){
    $prix = (0.1 * 10 + 0.09 * 20 + 0.08 * ($quantite - 31));
}
elseif($quantite > 10){
    $prix = (0.1 * 10 + 0.09 * ($quantite - 10));
}
else{
    $prix = 0.1 * $quantite;
}

echo "Le prix total est de : " . $prix

?>