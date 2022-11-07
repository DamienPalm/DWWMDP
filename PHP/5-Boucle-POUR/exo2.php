<?php

$nb = (int) readline ("Saisir un nombre entier : ");
echo "Les 5 nombres précédents sont : " . "\n";

for ($i = $nb - 1 ; $i >= $nb - 5 ; $i--){
    echo ($i) . "\n";
}

echo "**************************************" . "\n";
echo "Les 5 nombres suivants sont : " . "\n";

for ($i = $nb + 1 ; $i <= $nb + 5 ; $i++){
    echo ($i) . "\n";
}

?>