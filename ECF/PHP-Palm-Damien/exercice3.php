<?php

$continuer = "o";
echo "Racine de l'équation du 2nd degré" . "\n" . "          Y = ax² + b + c" . "\n" . "" . "\n";

while ($continuer == "o"){
    $a = readline ("Quelle est la valeur de a : ");
    $b = readline ("Quelle est la valeur de b : ");
    $c = readline ("Quelle est la valeur de c : ");
    echo "" . "\n";
    $delta = ($b * $b) - 4 * $a * $c;
    if ($delta < 0){
        echo "L'équation ne possède pas de racine réelle" . "\n" . "Delta = " . $delta . "\n";
        $continuer = readline ("Voulez-vous continuer ? ");
    }
    elseif ($delta > 0){
        echo "L'équation possède 2 racines distinctes :" . "\n" . "Delta = " . $delta . "\n" . "L'équation s'annule pour : " . "\n" . "X1 = " . 
        $racine1 = (-$b + sqrt ($delta)) / (2 * $a) . "\n" . "X2 = " . $racine2 = (-$b - sqrt ($delta)) / (2 * $a) . "\n" . "" . "\n";
        $continuer = readline ("Voulez-vous continuer ? ");
    }
    else{
        echo "L'équation possède une racine double :" . "\n" . "Delta = " . $delta . "\n" . "X1 = X2 = " . $racine2 = (-$b - sqrt ($delta)) / (2 * $a) . "\n" . "" . "\n";
        $continuer = readline ("Voulez-vous continuer ? ");
    }
    $continuer == "N";
}
if ($continuer == "N"){
    echo "Au revoir et à bientôt";
}

?>