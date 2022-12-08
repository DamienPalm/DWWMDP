<?php

class LigneDeProduit
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
}
