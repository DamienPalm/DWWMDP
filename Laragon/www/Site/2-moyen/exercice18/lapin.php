<?php

require "animal.php";

class Lapin extends Animal
{
    private bool $enVie;

    public function __construct($enVie, $couleur, $nombrePatte)
    {
        $this->enVie = $enVie;
        Animal::__construct($couleur, $nombrePatte);
    }

    public function getEnVie()
    {
        return $this->enVie;
    }

    public function setEnVie($enVie)
    {
        $this->enVie = $enVie;
    }

    public function seNourrir(){}
}