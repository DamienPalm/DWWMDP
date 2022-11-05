<?php

$sexe = readline("Préciser le sexe ");
$age = readline("Quel est votre âge ?  ");

if(($sexe == "homme" && $age >= 20) || ($sexe == "femme" && $age >= 18) && ($sexe == "femme" && $age <= 35)){
    echo "imposable";
}

else{
    echo "non imposable";
}

?>