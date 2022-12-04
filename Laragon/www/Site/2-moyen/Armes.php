<?php

class Armes{
    private static $identifiant=1;
    private static $arme = [];
    private $id;
    private $nom;
    private $degat;

    public function __construct($nom, $degat){
        $this->nom = $nom;
        $this->degat = $degat;
        $id=self::$identifiant++;
        $this->id=$id;
        self::$arme;
    }

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getDegat(){return $this->degat;}

    public function presentationArme(){
        echo "ID : " . $this->id . "<br>";
        echo "Nom : " . $this->nom . "<br/>";
        echo "Degat : " . $this->degat . "<br/>";
    }
}