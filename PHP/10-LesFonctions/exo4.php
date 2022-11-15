<?php

require "Fonction.php";

$nb = readline("mettre un nombre ");
for ($i = 1 ; $i <= 10 ; $i++){
    echo multi($nb,$i) . "\n";
}

?>