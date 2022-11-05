<?php

$nb = readline("choisir un nombre entre 10 et 20 ");
while($nb < 10){
    echo "Plus grand ! " . "\n";
    $nb = readline("choisir un nombre entre 10 et 20 ");
}
while($nb > 20){
    echo "Plus petit ! " . "\n";
    $nb = readline("choisir un nombre entre 10 et 20 ");
}

echo "GG ! "

?>