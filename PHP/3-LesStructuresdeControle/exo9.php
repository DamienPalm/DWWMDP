<?php

$age = readline("Quel est votre âge ?");
$sexe = readline("Préciser le sexe");

if ($sexe = "homme" && $age > 20){
    echo "imposable";
}
elseif ($sexe = "femme" && $age > 18 || $sexe = "femme" && $age < 35){
    echo "imposable";
}
else{
    echo "non imposable";
}

?>