<?php ob_start() ?>

<?php

$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;

if ($homme) {
    echo $nom . " a " . $age . " ans et c'est un homme" . "<br>" . "" . "<br>";
} else {
    echo $nom . " a " . $age . " ans et c'est une femme" . "<br>" . "" . "<br>";
}

if ($homme2) {
    echo $nom2 . " a " . $age2 . " ans et c'est un homme";
} else {
    echo $nom2 . " a " . $age2 . " ans et c'est une femme";
}


?>

<?php
$content = ob_get_clean();
$titre = "exercice1";
require "../template.php";
?>