<?php ob_start() ?>


<?php

class Ville
{
    public $nom;
    public $dep;

    public function __construct($nom, $dep)
    {
        $this->nom = $nom;
        $this->departement = $dep;
        echo " la ville $this->nom est dans le département $this->departement" . "<br>";
    }
}

$ville1 = new Ville("Arras", "Pas-de-Calais");
$ville2 = new Ville("Bray-Dunes", "Nord");

?>


<?php
$content = ob_get_clean();
$titre = "Exercice 1 POO - les objets";
require "../template.php";
?>