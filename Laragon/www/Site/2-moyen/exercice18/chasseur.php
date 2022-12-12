<?php
require_once "humain.php";

class Chasseur extends Humain
{
    private string $arme;

    public function __construct($arme, $nom)
    {
        $this->arme = $arme;
        Humain::__construct($nom);
        
    }

    public function getArme()
    {
        return $this->arme;
    }

    public function setArme($arme)
    {
        $this->arme = $arme;
    }
}