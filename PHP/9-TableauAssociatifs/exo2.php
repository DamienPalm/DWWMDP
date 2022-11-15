<?php

$tabNotes = array("Boucher" =>16,"Bourdette" =>13, "Braquemard"=>10, "Finito"=>2, "1PLIKÉ140"=>20, "P'tit Con" => 0) ;

foreach($tabNotes as $nom => $valeur){
    echo
     "Note de " . $nom . " est de : " . $valeur . "\n" ;
}

foreach($tabNotes as $nom => $valeur){
$moyenne = array_sum($tabNotes) / count($tabNotes);
}

echo "La moyenne est de :  " . $moyenne . "\n" ;

?>