<?php ob_start()?>


<?php

class Employe{
    public $nom;
    public $prenom;
    public $domicile;
    public $ville;
    public $tel;

    public function __construct($nom, $prenom, $domicile, $ville, $tel){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $domicile;
        $this->ville = $ville;
        $this->telephone = $tel;
        echo "Nom : " . $this->nom . "<br>" . "Prénom : " . $this->prenom . "<br>" . "Adresse : " . $this->adresse . "<br>" . 
        "Ville : " . $this->ville . "<br>" . "Numéro de téléphone : " . $this->telephone . "<br>";
        echo "----------------------------------------" . "<br>";
    }

    function trialpha($tab){
        asort($tab);
        echo $tab;
    }

}

$employe1 = new Employe("Palm", "Damien", "873 boulevard Georges Pompidou", "Bray-Dunes", "06.37.02.06.30");
$employe2 = new Employe("Meteyer", "Lucie", "Résidence Orléans, Bat B, Apt.3, Allée de Fréjus", "Saint-Pol sur Mer", "06.41.49.56.08" );
$employe = [$employe1, $employe2];

?>


<?php
$content = ob_get_clean();
$titre = "Exercice 1 POO - les objets";
require "../template.php";
?>