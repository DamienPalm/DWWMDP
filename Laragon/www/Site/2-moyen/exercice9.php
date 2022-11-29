<?php ob_start() ?>


<?php

class Voiture
{
    private $marque;
    private $model;
    private $couleur;
    private $porte;
    private $electrique;

    public function __construct($marque, $model, $couleur, $porte, $electrique)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        $this->porte = $porte;
        $this->electrique = $electrique;
    }

    //GETTER

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function getPorte()
    {
        return $this->porte;
    }
    public function getElectrique()
    {
        return $this->electrique;
    }

    //SETTER

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function setPorte($porte)
    {
        $this->porte = $porte;
    }
    public function setElectrique($electrique)
    {
        $this->electrique = $electrique;
    }
}

$voiture1 = new Voiture("Tesla", "Model S", "Blanc", 5, true);
$voiture2 = new Voiture("RolceRoyce", "Phamtom", "Noir", 5, false);
$voiture3 = new Voiture("Lamborghini", "Urus", "Jaune", 5, false);
$voiture4 = new Voiture("Tesla", "Model 3", "Blanc", 5, true);

$voitures = [$voiture1, $voiture2, $voiture3, $voiture4];

foreach ($voitures as $voiture) {

    if ($voiture->getElectrique() === true) {
        $car = "electrique";
    } else {
        $car = "Non electrique";
    }

    echo "Marque : " . $voiture->getMarque() . "<br>" . "Model : " . $voiture->getModel() . "<br>" . "Couleur : " . $voiture->getCouleur() . "<br>" .
        "Nombre de porte : " . $voiture->getPorte() . "<br>" . "Type de voiture : " . $car . "<br>";
    echo "--------------------------" . "<br>";
}

?>

<form action="" method="get">
    <input type="submit" class="btn btn-primary" value="Tesla" name="Tesla" />
    <input type="submit" class="btn btn-primary" value="RolceRoyce" name="RolceRoyce" />
    <input type="submit" class="btn btn-primary" value="Lamborghini" name="Lamborghini">
</form>

<?php

if (isset($_GET["Tesla"])) {
    foreach ($voitures as $voiture) {
        if ($marque = $voiture->getMarque() == "Tesla") {
            echo "Marque : " . $voiture->getMarque() . "<br>" . "Model : " . $voiture->getModel() . "<br>" . "Couleur : " . $voiture->getCouleur() . "<br>" .
                "Nombre de porte : " . $voiture->getPorte() . "<br>" . "Type de voiture : " . $car . "<br>";
            echo "--------------------------" . "<br>";
        }
    }
}

if (isset($_GET["RolceRoyce"])) {
    foreach ($voitures as $voiture) {
        if ($marque = $voiture->getMarque() == "RolceRoyce") {
            echo "Marque : " . $voiture->getMarque() . "<br>" . "Model : " . $voiture->getModel() . "<br>" . "Couleur : " . $voiture->getCouleur() . "<br>" .
                "Nombre de porte : " . $voiture->getPorte() . "<br>" . "Type de voiture : " . $car . "<br>";
            echo "--------------------------" . "<br>";
        }
    }
}

if (isset($_GET["Lamborghini"])) {
    foreach ($voitures as $voiture) {
        if ($marque = $voiture->getMarque() == "Lamborghini") {
            echo "Marque : " . $voiture->getMarque() . "<br>" . "Model : " . $voiture->getModel() . "<br>" . "Couleur : " . $voiture->getCouleur() . "<br>" .
                "Nombre de porte : " . $voiture->getPorte() . "<br>" . "Type de voiture : " . $car . "<br>";
        }
    }
}

?>

<?php
$content = ob_get_clean();
$titre = "Exercice 2 POO - GETTER et SETTER";
require "../template.php";
?>