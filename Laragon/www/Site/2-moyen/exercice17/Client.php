<?php

class Client
{
    private string $nom;
    private string $prenom;
    private string $numClient;


    // CONSTRUCTEUR
    public function __construct($nom, $prenom, $numClient)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numClient = $numClient;
    }

    // GETTER
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNumClient()
    {
        return $this->numClient;
    }


    // SETTER
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNumClient($numClient)
    {
        $this->numClient = $numClient;
    }

    public function afficher(){
        echo "Nom : " . $this->nom . "<br>";
        echo "Prenom : " . $this->prenom . "<br>";
        echo "N° Client : " . $this->numClient . "<br>";
    }
}