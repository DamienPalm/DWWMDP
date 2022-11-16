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
    return ($nb * $i);
}

function factorielle ($nb, $i, $factorielle){
    for ($i = 2 ; $i <$nb ; $i++){
        $factorielle = $factorielle * $i;
    }
    return ($factorielle * $i);

}

function addition ($tab){
    return (array_sum($tab));
}

function triangle ($i, $nb){
    while ($i<$nb){
        for ($j=0; $j<$i; $j++){
            echo "* ";
        }
        echo "\n";
        $i++;
    }
    while ($i>0){
        for ($j = 0 ; $j<$i ; $j++){
            echo "* ";
        }
        echo "\n";
        $i--;
    }

    return;
}

function comparaison ($nb1, $nb2){
    if ($nb1 > $nb2){
        echo $nb1 . " est plus grand que " . $nb2;
    }
    elseif ($nb1 < $nb2){
        echo $nb1 . " est plus petit que " . $nb2;
    }
    else{
        echo $nb1 . " est égale à " . $nb2;
    }
    return;
}


?>