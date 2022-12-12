<?php

abstract class Humain implements Deplacement
{
    private string $nom;

    public function Sedeplacer($deplacement){
        $this->deplacement = $deplacement;
    }

    protected function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}