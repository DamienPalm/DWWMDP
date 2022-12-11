<?php

class LigneDeCommande
{
    private int $qte;

    // CONSTRUCTEUR
    public function __construct($qte)
    {
        $this->qte = $qte;
    }

    // GETTER
    public function getQte()
    {
        return $this->qte;
    }

    // SETTER
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    public function calculTotalLigneTTC(Produit $produit, $qte){
        $TTC = $produit->getPxUnitaireTTC() * $qte;
        return $TTC;
    }
    

    
}
