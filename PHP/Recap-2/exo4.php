<?php

$tab = [];

for ($i = 0 ; $i < 10 ; $i++){
    $tab [$i] = rand (1, 50);
}

foreach ($tab as $valeur){
    echo $valeur . "\n";
}

if(in_array(42, $tab)){
    echo "Il y a le nombre 42";
}

else {
    echo "Il n'y a pas le nombre 42";
}

?>