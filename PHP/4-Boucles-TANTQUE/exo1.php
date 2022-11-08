<?php

$nb = readline ("mettre un nombre entre 1 et 3 : ");


while (filter_var ($nb, FILTER_VALIDATE_INT) != true) {
    echo( $nb . " n'est pas un entier") . "\n";
    $nb = readline ("mettre un nombre entre 1 et 3 : ");
}

while ($nb < 1 || $nb > 3){
    $nb = readline ("mettre un nombre entre 1 et 3 : ");
}
echo "GG";

?>