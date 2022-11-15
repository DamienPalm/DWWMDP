<?php

$i = 0;
while ($i<7){
    for ($j=0; $j<$i; $j++){
        echo "* ";
    }
    echo "\n";
    $i++;
}
while ($i>0){
    for ($j = 0 ; $j<$i ; $j++){
        echo "* ";
    }
    echo "\n";
    $i--;
}
?>