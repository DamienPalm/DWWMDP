<?php ob_start() ?>

<form action="" method="get">
    <input type="submit" class="btn btn-primary" value="Animaux" name="Animaux" />
    <input type="submit" class="btn btn-primary" value="Chien" name="Chien" />
    <input type="submit" class="btn btn-primary" value="Chat" name="Chat">
</form>

<?php



class Animal
{
    private $nom;
    private $age;
    private $type;

    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getType()
    {
        return $this->type;
    }

    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this->nom;
    }
    public function setAge($age)
    {
        $this->age = $age;
        return $this->age;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this->type;
    }
}

$animal1 = new Animal("Myla", 6, "chien");
$animal2 = new Animal("Sparrow", 7, "chat");
$animal3 = new Animal("Hina", 8, "chat");
$animaux = [$animal1, $animal2, $animal3];

foreach ($animaux as $animal) {
    $nom = $animal->getNom();
    $age = $animal->getAge();
    $type = $animal->getType();
}

?>

<p>
    <?php

    if (isset($_GET["Animaux"])) {
        foreach ($animaux as $animal) {
            if ($type = $animal->getType()) {
                echo "Je m'appelle " . $animal->getNom() . " j'ai " . $animal->getAge() . " ans et je suis un " . $animal->getType() . "<br>";
            }
        }
    }

    if (isset($_GET["Chien"])) {
        foreach ($animaux as $animal) {
            if ($type = $animal->getType() == "chien") {
                echo "Je m'appelle " . $animal->getNom() . " j'ai " . $animal->getAge() . " ans et je suis un " . $animal->getType() . "<br>";
            }
        }
    }

    if (isset($_GET["Chat"])) {
        foreach ($animaux as $animal) {
            if ($type = $animal->getType() == "chat") {
                echo "Je m'appelle " . $animal->getNom() . " j'ai " . $animal->getAge() . " ans et je suis un " . $animal->getType() . "<br>";
            }
        }
    }
    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "Exercice 1 POO - GETTER et SETTER";
require "../template.php";
?>