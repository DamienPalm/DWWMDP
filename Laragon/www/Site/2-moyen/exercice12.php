<?php ob_start()?>


<?php

class Livre{
    private $nom;
    private $edition;
    private $auteur;
    private $date;

    public function __construct($nom, $edition, $auteur, $date){
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
    }

    public function __toString(){
        $afficher = "Titre du livre : " . $this->nom . "<br>" . "Edition : " . $this->edition . "<br>" . "Auteur : " . $this->auteur . "<br>" . "Date de parution : " . $this->date;
        return $afficher;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getEdition(){
        return $this->edition;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getDate(){
        return $this->date;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setEdition($edition){
        $this->edition = $edition;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function afficher(){
        echo $this->__toString();
    }
}

$livre1 = new Livre ("Trashtalk", "Marabou", "Trashtalk", 2018);
$livre2 = new Livre ("Trashtalk : Le plus grand livre de basketball de tous les temps", "Marabou", "Trashtalk", 2020);
$livre3 = new Livre ("Kobe Bryant - Mamba mentality, ma façon de jouer", "Hugo Sport", "Kobe Bryant", 2019);
$livres = [$livre1, $livre2, $livre3];


foreach($livres as $livre){
    echo $livre->__toString() . "<br>";
}
?>

<?php
$content = ob_get_clean();
$titre = "Exercice 3 POO - GETTER et SETTER";
require "../template.php";
?>