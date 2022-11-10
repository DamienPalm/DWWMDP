<?php

$dico = ["divin", "dominant", "lumiere", "mâle"];
$saisie = readline ("Quel mot cherchez vous ? ");
$estVrai = false;
for ($i=0 ; $i < count ($dico) ; $i++){
    if ($dico[$i] == $saisie){
        echo "Le mot est bien dans le dico";
        $estVrai = true;
    }
}

if ($estVrai == false){
echo "n'est pas dans le dico";
}
?>