<?php ob_start()?>

<?php
require "fonction.php";

class Stagiaire{

    private $nom;
    private $note;

    public function __construct($nom, $note){
        $this->nom = $nom;
        $this->note = $note;
    }

    //GETTER

    public function getNom(){
        return $this->nom;
    }

    public function getNote(){
        return $this->note;
    }

    //SETTER

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setNote($note){
        $this->note = $note;
    }

}

$stagiaire1 = new Stagiaire ("Damien", [20, 18, 15, 17, 15]);
$stagiaire2 = new Stagiaire ("Lucie", [15, 12, 13, 20, 14]);
$stagiaire3 = new Stagiaire ("Florentin", [17, 18, 19, 15, 16]);
$stagiaire4 = new Stagiaire ("Fred", [20, 17, 16, 18, 15]);

$stagiaires = [$stagiaire1, $stagiaire2, $stagiaire3, $stagiaire4];

foreach($stagiaires as $stagiaire){
    echo $stagiaire->getNom() . " ";
    foreach($stagiaire->getNote() as $value){
        echo $value . " ";
    }
    echo " La moyenne du stagiaire est de : ";
    echo calculerMoyenne($stagiaire->getNote()) . "<br>";
    echo "La note la plus haute est : ";
}











?>


<?php
$content = ob_get_clean();
$titre = "Exercice 3 POO - GETTER et SETTER";
require "../template.php";
?>