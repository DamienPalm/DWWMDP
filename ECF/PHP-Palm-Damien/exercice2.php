<?php

$continuer = "o";

echo "        *******  Table de Multiplication  *******" . "\n";

while ($continuer == "o"){
    $nombre = readline ("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    echo "" . "\n";
    for ($i = 1 ; $i <= 10 ; $i++){
        echo $nombre . " x " . "$i" . " = " . $nombre * $i . "\n";
    }
    echo "" . "\n";
    $continuer = readline ("Voulez-vous faire un autre calcul (O/N) : ");
    echo "" . "\n";
    $continuer == "N";
}

if ($continuer == "N"){
    echo "";
}

?>