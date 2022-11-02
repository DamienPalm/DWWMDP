<?php

$nb1 = readline("écrire un nombre");
$nb2 = readline("écrire un nombre");
if (($nb1 > 0 && $nb2 > 0) || ($nb1 < 0 && $nb2 < 0)){
    echo "positif";
}
else{
    echo "négatif";
}
?>