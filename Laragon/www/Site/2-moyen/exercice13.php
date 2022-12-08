<?php ob_start() ?>


<?php
class Personnage
{
    private static $personnages = [];
    private $nom;
    private $taille;
    private $age;
    private $sexe;

    const HOMME = true;
    const FEMME = false;

    public function __construct($name, $taille, $age, $sexe)
    {
        $this->nom = $name;
        $this->taille = $taille;
        $this->age = $age;
        $this->sexe = $sexe;
        self::$personnages[] = $this;
    }

    public function presentation()
    {
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Taille : </b>" . $this->taille . "<br/>";
        echo "<b>Age : </b>" . $this->age . "<br/>";
        echo "<b>Sexe : </b> : ";
        if ($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
    }

    public static function getListPersonnage()
    {
        return self::$personnages;
    }
}

//On va dire que la personnage 1 est une instance de la Personnage

$personnage1 = new Personnage("Mario", 165, 31, Personnage::HOMME);
$personnage2 = new Personnage("Luigi", 165, 35, Personnage::HOMME);
$personnage3 = new Personnage("Peach", 160, 30, Personnage::FEMME);

$recupPersonnages = Personnage::getListPersonnage();

foreach ($recupPersonnages as $value) {
    $value->presentation();
    echo "------------------------------------<br/>";
}

?>


<?php
$content = ob_get_clean();
$titre = "Exercice Static";
require "../template.php";
?>