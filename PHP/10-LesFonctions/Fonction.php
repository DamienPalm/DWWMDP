<?php

function pxTTC ($pxHT, $nb){
    echo "Le prix TTC est de ";
    return 
    ($pxHT * $nb * 1.2);
}

function PGCD ($nb1, $nb2){

    while ($nb2 > 0){
        $reste = $nb1 % $nb2;
        $nb1 = $nb2;
        $nb2 = $reste;
    }
    return $nb1;
}

function PPCM ($nb1, $nb2){
    echo "Le PPCM est de ";
    return ($nb1 * $nb2 / PGCD($nb1, $nb2));
}

function multi ($nb, $i){
    for ($i=0 ; $i < 10 ; $i++){
        $nb * $i . "\n";
    }
    return ($nb * $i);
}

?>