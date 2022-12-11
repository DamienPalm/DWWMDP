<?php ob_start() ?>

<form action="" method="get">
    <input type="submit" class="btn btn-secondary" value="Animaux"  name="Animaux" />
    <input type="submit" class="btn btn-secondary" value="Chien"  name="Chien" />
    <input type="submit" class="btn btn-secondary" value="Chat" name="Chat" />
</form>

<?php



class Animal
{
    public $nom;
    public $age;
    public $type;

    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }
    public function afficher()
    {
        echo "Bonjour, je m'appelle $this->nom j'ai $this->age ans et je suis un $this->type" . "<br/>";
    }
}

$animal1 = new Animal("Myla", 6, "chien");
$animal2 = new Animal("Sparrow", 7, "chat");
$animal3 = new Animal("Hina", 8, "chat");
$animaux = [$animal1, $animal2, $animal3];

?>

<p>
    <?php

    if (isset($_GET["Animaux"])) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        foreach ($animaux as $animal) {
            if ($animal->type) {
                echo "Je m'appelle " . $animal->nom . " j'ai " . $animal->age . " ans et je suis un " . $animal->type . "<br>";
            }
        }
        echo "</p>";
    }

    if (isset($_GET["Chien"])) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        foreach ($animaux as $animal) {
            if ($animal->type == "chien") {
                echo "Je m'appelle " . $animal->nom . " j'ai " . $animal->age . " ans et je suis un " . $animal->type;
            }
        }
        echo "</p>";
    }

    if (isset($_GET["Chat"])) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        foreach ($animaux as $animal) {
            if ($animal->type == "chat") {
                echo "Je m'appelle " . $animal->nom . " j'ai " . $animal->age . " ans et je suis un " . $animal->type . "<br>";
            }
        }
        echo "</p>";
    }
    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "Exercice 1 POO - les objets";
require "../../template.php";
?>