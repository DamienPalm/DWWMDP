<?php

$tab = [];
$valMax = 0;

for ($i = 0 ; $i < 8 ; $i++){
    for ($j = 0 ; $j < 12 ; $j++){
        $tab[$i][$j] = rand (0, 50);
        echo $tab[$i][$j];
    }
    echo "\n";
    if ($valMax < $tab [$i]){
        $valMax = $tab [$i];
    }
}

echo ($valMax);

?>