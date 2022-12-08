<?php

class Player
{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct()
    {
        $this->force = 5;
        $this->pv = 100;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getForce()
    {
        return $this->force;
    }
    public function getPv()
    {
        return $this->pv;
    }
    public function getIdArme()
    {
        return $this->idArme;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function setIdArme($idArme)
    {
        $this->idArme = $idArme;
    }



    public function presentationPlayer()
    {
        $armes = Armes::recupererArme($this->id);
        echo "Nom : " . $this->nom . "<br/>";
        echo "Force : " . $this->force . "<br/>";
        echo "PV : " . $this->pv . "<br/>";
        echo "Arme : " . $this->idArme . "<br>";
    }
}
