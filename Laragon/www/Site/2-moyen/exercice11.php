<?php ob_start() ?>


<?php
class Stagiaire
{

    private $nom;
    private $sexe;

    const HOMME = true;
    const FEMME = false;


    public function __construct($nom, $sexe)
    {
        $this->nom = $nom;
        $this->sexe = $sexe;
    }

    //GETTER

    public function getNom()
    {
        return $this->nom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    //SETTER

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}

$stagiaire1 = new Stagiaire("Damien", Stagiaire::HOMME);
$stagiaire2 = new Stagiaire("Lucie", Stagiaire::FEMME);
$stagiaire3 = new Stagiaire("Florentin", Stagiaire::HOMME);
$stagiaire4 = new Stagiaire("Fred", Stagiaire::HOMME);

$stagiaires = [$stagiaire1, $stagiaire2, $stagiaire3, $stagiaire4];

foreach ($stagiaires as $stagiaire) {
    if ($stagiaire->getSexe() === true) {
        $sexe = " Homme";
    } else {
        $sexe = " Femme";
    }
    echo "Nom : " . $stagiaire->getNom() . "<br>" . "Sexe : " . $sexe . "<br>" . "---------------------------------------" . "<br>";
}

?>


<?php
$content = ob_get_clean();
$titre = "Exercice 3 POO - GETTER et SETTER";
require "../template.php";
?>