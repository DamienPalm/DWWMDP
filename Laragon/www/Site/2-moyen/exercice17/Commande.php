<?php

class Commande
{
    private string $numeroCommande;
    private array $listeLigneCommande;

    // CONSTRUCTEUR
    public function __construct($numeroCommande, $listeLigneCommande)
    {
        $this->numeroCommande = $numeroCommande;
        $this->listeLigneCommande = $listeLigneCommande;
    }

    // GETTER
    public function getNumeroCommande()
    {
        return $this->numeroCommande;
    }
    public function getListeLigneCommande()
    {
        return $this->listeLigneCommande;
    }

    // SETTER
    public function setNumeroCommande($numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;
    }
    public function setListeLigneCommande($listeLigneCommande)
    {
        $this->listeLigneCommande = $listeLigneCommande;
    }
}
