<?php

function affichage ($tab){
    foreach ($tab as $key => $value){
        echo $key . " : " . $value . "<br>";
    }
}

function afficherTableau ($tab){
    foreach ($tab as $value){
        echo $value . " ";
    }
}

function calculerMoyenne ($tab){
    echo (array_sum($tab)/count($tab)); 
}

function estTableauPair ($tab){
    for ($i=0 ; $i<count($tab) ; $i++){
        $pair=$tab[$i]%2;
    }
    if ($pair == 0){
        echo "Ce tableau ne contient que des nombres pairs";
    }
    else{
        echo "Ce tableau ne contient pas que des nombres pairs";
    }
}

?>