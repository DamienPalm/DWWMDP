<?php

$nb = readline ("mettre un nombre entre 1 et 3 : ");


if (filter_var ($nb, FILTER_VALIDATE_INT) !== false) {
    echo($nb . " est pas un entier");
}
else {
    echo( $nb . " n'est pas un entier");
}

while ($nb < 1 || $nb > 3){
    $nb = readline ("mettre un nombre entre 1 et 3 : ");
}
echo "GG";

?>