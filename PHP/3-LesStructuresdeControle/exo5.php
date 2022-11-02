<?php

$age = readline("Quel est votre age ?");
if ($age > 12)
    echo "Cadet";

elseif ($age >= 10){
    echo "Minime";
}
elseif ($age >= 8){
    echo "Pupille";
}
elseif ($age >= 6){
    echo "Poussin";
}
?>