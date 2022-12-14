<?php
require "lapin.php";
require "chasseur.php";

$lapin = new Lapin (true, "blanc",4);
$chasseur = new Chasseur ("fusil", "Jack");

echo "Le lapin " . $lapin->getCouleur() . " a " . $lapin->getNombrePatte() . " pattes a été créé" . "\n";
echo "Le chasseur " . $chasseur->getNom() . " a été créé avec un " . $chasseur->getArme() . "\n";

while($lapin->getEnVie()){
    $lapin->setEnVie(rand());
    if($lapin->getEnVie()%2==0){
        $lapin->setEnVie(true);
        echo $lapin->seNourrir();
        echo $chasseur->seDeplacer();
        echo $lapin->crier();
        echo $chasseur->chasser();
        echo $lapin->seDeplacer();
    }
    else{
        $lapin->setEnVie(false);
        echo $lapin->seNourrir();
        echo $chasseur->seDeplacer();
        echo $lapin->crier(); 
        echo $chasseur->chasser();
        echo $lapin->seDeplacer();
    }
}