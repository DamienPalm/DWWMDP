<?php

$nb = rand(0, 20);

echo "Nombre : " . $nb . "\n";

if ($nb >= 14){
    echo "Hello";
}

elseif ($nb >= 7){
    echo "Salut";
}

else {
    echo "Bonjour";
}

?>