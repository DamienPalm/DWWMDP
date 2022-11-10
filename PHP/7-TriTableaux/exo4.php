<?php

$dico = ["divin", "dominant", "lumiere", "mâle"];
$saisie = readline ("Quel mot cherchez vous ? ");
$estVrai = false;
for ($i=0 ; $i < count ($dico) ; $i++){
    if ($dico[$i] == $saisie){
        echo $saisie . " est bien dans le dico";
        $estVrai = true;
    }
}

if ($estVrai == false){
echo $saisie . " n'est pas dans le dico";
}
?>