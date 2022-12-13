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


    public function chasser()
    {
        return $this->getNom() . " tire sur le lapin avec son fusil est ..." . "\n";
    }


    public function seDeplacer()
    {
        $phrase = $this->getNom() . " avance avec son fusil" . "\n";
        return $phrase;
    }
}