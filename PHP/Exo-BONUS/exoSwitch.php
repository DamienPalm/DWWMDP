<?php

echo "***** La Super Calculatrice *****" . "\n";
$nb1 = readline ("Saisir un nombre : ");
$nb2 = readline ("Saisir un nombre : ");
echo "1. Addition" . "\n" . "2. Soustraction" . "\n" . "3. Multiplication" 
. "\n" . "4. Division" ."\n";
$operation = readline ("Quelle opération souhaitez vous faire : ");



switch ($operation){
    case 1:
        echo ($nb1 + $nb2);
        break;
    case 2:
        echo ($nb1 - $nb2);
        break;
    case 3:
        echo ($nb1 * $nb2);
        break;
    case 4:
        echo ($nb1 / $nb2);
        break;
}
?>