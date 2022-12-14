<?php

require_once "deplacement.php";

abstract class Animal implements Deplacement{
    private string $couleur;
    private int $nombrePatte;

    protected function __construct($couleur, $nombrePatte)
    {
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
    }


    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getNombrePatte()
    {
        return $this->nombrePatte;
    }


    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function setNombrePatte($nombrePatte)
    {
        $this->nombrePatte = $nombrePatte;
    }
    

    public function seDeplacer()
    {
        $phrase = "Le lapin " . $this->couleur . " s'enfuie sur ses " . $this->nombrePatte . " d'un seul bond !" . "\n";
        return $phrase;
    }

    public function crier()
    {
        $phrase = "Le lapin glapie de peur" . "\n";
        return $phrase;
    }
}