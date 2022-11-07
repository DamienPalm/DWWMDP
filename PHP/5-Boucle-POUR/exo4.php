<?php

$nb = (int) readline("Saisir un nombre : ");
$max = $nb;
$min = $nb;

for ($i = 1 ; $i < 5 ; $i++){
    $nb = readline("Saisir un nombre : ");
    if ($max < $nb){
        $max = $nb;
    }
    elseif ($min > $nb){
        $min = $nb;
    }
}
echo ($max) . "\n";
echo ($min);

?>