<?php

class LigneDeProduit
{
    private int $qte;

    public function __construct($qte)
    {
        $this->qte = $qte;
    }

    public function getQte()
    {
        return $this->qte;
    }

    public function setQte($qte)
    {
        $this->qte = $qte;
    }
}
