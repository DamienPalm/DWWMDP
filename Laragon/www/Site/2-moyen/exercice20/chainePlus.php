<?php

class ChainePlus{
    private string $chaine;

    public function __construct($chaine)
    {
        $this->chaine = $chaine;
    }

    public function getChaine(){return $this->chaine;}
    public function setChaine($chaine){$this->chaine = $chaine;}

    public function gras(){
        echo "<b>{$this->chaine}</b>";
    }

    public function  italique(){
        echo "<i> {$this->chaine} </i>";
    }

    public function souligne(){
        echo "<u> {$this->chaine} </u>";
    }

    public function majuscules(){
        echo strtoupper($this->chaine);
    }

}