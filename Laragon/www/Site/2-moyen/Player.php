<?php

class Player{
    private $nom;
    private $force;
    private $pv;
    private $arme;

    public function __construct($nom, $force, $pv, $arme){
        $this->nom = $nom;
        $this->force = $force;
        $this->pv = $pv;
        $this->arme = $arme;
    }

    public function getNom(){return $this->nom;}
    public function getForce(){return $this->force;}
    public function getPv(){return $this->pv;}
    public function getArme(){return $this->arme;}



    public function presentationPlayer(){
        echo "Nom : " . $this->nom . "<br/>";
        echo "Force : " . $this->force . "<br/>";
        echo "PV : " . $this->pv . "<br/>";
        echo "Arme : " . $this->arme . "<br>";
    }
}