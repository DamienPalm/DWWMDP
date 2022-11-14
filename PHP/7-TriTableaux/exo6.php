<?php

$tab1 = [5, 2, 3, 4, 1, 9, 8];
$tab2 = [7, 6, 10];
$tab = [];
$estVrai = true;
$tab = array_merge($tab1, $tab2);

while ($estVrai) {

    $estVrai = false;

    for ($i = 0; $i < count($tab) - 2; $i++) {

        if ($tab[$i] > $tab[$i + 1]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i + 1];
            $tab[$i + 1] = $temp;
            $estVrai = true;
        }
    }
}

foreach ($tab as $valeur){
    echo $valeur . "\n";
}

?>