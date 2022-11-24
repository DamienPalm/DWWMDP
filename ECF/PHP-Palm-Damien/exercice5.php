<?php

$tab = [];
$tab1 = [];
$tab2 = [];
$tab3 = [];

for ($i = 0 ; $i < 10 ; $i++){
    echo $tab[$i] = rand (20, 100) . " ";
}

echo "\n" . "" . "\n" . "0. Quitter" . "\n" . "1 . Trier le tableau en ordre croissant" . "\n" . "2. Trier le tableau en ordre décroissant" . "\n" . "3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2" . "\n" . "4. Inverser le tableau 3" . "\n" . "" . "\n";

$action = readline ("Quelle action souhaitez vous faire ? ");

switch ($action){
    case 0:
        break;
    case 1:
        sort($tab);
        foreach ($tab as $value){
            echo $value . " ";
        }
        
    break;
    case 2:
        rsort($tab);
        foreach ($tab as $value){
            echo $value . " ";
        }
    break;
    case 3:
        $tab1[$i] = sort($tab);
        foreach ($tab as $value){
            echo $value . " ";
        }
        echo " " . "\n";
        $tab2[$i] = rsort($tab);
        foreach ($tab as $value){
            echo $value . " ";
        }
        
        $tab3[$i] = $tab1[$i] + $tab2[$i];
        echo $tab3       [$i] . " ";
        break;

}

?>