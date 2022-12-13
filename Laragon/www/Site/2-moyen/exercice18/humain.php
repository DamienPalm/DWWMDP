<?php

require_once "deplacement.php";

abstract class Humain implements Deplacement
{
    private string $nom;

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

    public function Sedeplacer(){}
}