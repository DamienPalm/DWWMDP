<?php

class LigneDeCommande
{
    private string $produit;
    private int $qte;

    // CONSTRUCTEUR
    public function __construct($produit, $qte)
    {
        $this->produit = $produit;
        $this->qte = $qte;
    }

    // GETTER
    public function getProduit()
    {
        return $this->quantite;
    }

    public function getQte()
    {
        return $this->qte;
    }

    // SETTER
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    public function calculTotalLigneTTC(Produit $produit, $qte){
        $TTC = $produit->getPxUnitaireTTC() * $qte;
        return $TTC;
    }
    

    
}
