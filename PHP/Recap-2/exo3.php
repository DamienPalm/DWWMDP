<?php
//i = lignes
//j = colonnes
$nb = readline ("Choisisser un nombre de ligne : ");
$i = 1;
while ($i<=$nb){
    for ($j=0; $j<$i; $j++){
        echo $i;
    }
    echo "\n";
    $i++;
}