<?php

class VilleIF implements IFormatage
{
    private string $cp;
    private string $ville;

    public function __construct($cp, $ville)
    {
        $this->cp = $this->formatageChaine($cp);
        $this->ville = $this->formatageChaine($ville);
    }

    public function getCp()
    {
        return $this->cp;
    }
    public function getVille()
    {
        return $this->ville;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function formatageNombre($nombre)
    {
        return number_format($nombre, 0, " , ", " ");
    }

    public function formatageChaine($chaine)
    {
        return strtoupper($chaine);
    }

    public function formatageDate($date)
    {
        
    }
}

?>