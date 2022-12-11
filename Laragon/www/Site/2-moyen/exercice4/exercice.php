<?php ob_start() ?>


<form action="" method="get">
    <input type="submit" class="btn btn-secondary" value="Animaux" name="Animaux" />
    <input type="submit" class="btn btn-secondary" value="Chien" name="Chien" />
    <input type="submit" class="btn btn-secondary" value="Chat" name="Chat" />
</form>

<?php
require "../fonction.php";

$tab1 = ['Nom' => "Myla", 'Âge' => 6, 'Type' => "Chien"];
$tab2 = ['Nom' => "Sparrow", 'Âge' => 7, 'Type' => "Chat"];
$tab3 = ['Nom' => "Hina", 'Âge' => 8, 'Type' => "Chat"];

$tabAnimaux =
array('Nom' => "Myla", 'Âge' => 6, 'Type' => "Chien");
array('Nom' => "Sparrow", 'Âge' => 7, 'Type' => "Chat");
array('Nom' => "Hina", 'Âge' => 8, 'Type' => "Chat");

?>

<p>
    <?php

    if (isset($_GET["Animaux"])) {
        foreach($tabAnimaux as $animaux){
                echo $animaux;
        }
    }
    

    if (isset($_GET["Chien"])) {
        foreach ($animaux as $animal) {
            if ($animal->type == "chien") {
                echo "Je m'appelle " . $animal->nom . " j'ai " . $animal->age . " ans et je suis un " . $animal->type;
            }
        }
    }

    if (isset($_GET["Chat"])) {
        foreach ($animaux as $animal) {
            if ($animal->type == "chat") {
                echo "Je m'appelle " . $animal->nom . " j'ai " . $animal->age . " ans et je suis un " . $animal->type . "<br>";
            }
        }
    }
    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "exercice 4 : Chien et chat";
require "../../template.php";
?>