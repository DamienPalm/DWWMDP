<?php

class Produit
{
    private string $libelle;
    private string $description;
    private string $reference;
    private float $pxUnitaireTTC;


    // CONSTRUCTEUR
    public function __construct($libelle, $description, $reference, $pxUnitaireTTC)
    {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->reference = $reference;
        $this->pxUnitaireTTC = $pxUnitaireTTC;
    }

    // GETTER
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getReference()
    {
        return $this->reference;
    }
    public function getPxUnitaireTTC()
    {
        return $this->pxUnitaireTTC;
    }


    // SETTER
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
    public function setPxUnitaireTTC($pxUnitaireTTC)
    {
        $this->pxUnitaireTTC = $pxUnitaireTTC;
    }
}
