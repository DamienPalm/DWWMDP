<?php

$nombre = readline("Mettre un nombre");
if ($nombre > 0){
    echo "positif";
}
elseif ($nombre == 0){
    echo "nul";
}
else{
    echo "négatif";
}
?>