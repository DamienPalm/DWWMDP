<?php

class Armes
{
    private static $identifiant = 1;
    private static $armes = [];
    private $id;
    private $nom;
    private $degat;

    public function __construct($nom, $degat)
    {
        $this->id = self::$identifiant;
        self::$identifiant++;
        $this->nom = $nom;
        $this->degat = $degat;
        self::$armes[] = $this;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDegat()
    {
        return $this->degat;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDegat($degat)
    {
        $this->degat = $degat;
    }

    public function presentationArme()
    {
        echo "ID : " . $this->id . "<br>";
        echo "Nom : " . $this->nom . "<br/>";
        echo "Degat : " . $this->degat . "<br/>";
    }

    public function recupererArme($id){
        foreach(self::$armes as $arme){
            if($id == $arme->id){
                return $arme;
            }
        }
    }
}
