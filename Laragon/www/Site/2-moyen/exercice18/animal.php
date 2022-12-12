<?php

abstract class Animal implements Deplacement{
    private string $couleur;
    private int $nombrePatte;

    public function Sedeplacer($deplacement){
        $this->deplacement = $deplacement;
    }

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

    public function crier()
    {
        echo "glapie";
    }
}