<?php ob_start()?>

<?php
require "fonction.php";

$tab = [1, 2, 3];

 echo afficherTableau($tab) . "<br>";
 echo "La moyenne du tableau est de ";
 echo calculerMoyenne($tab) . "<br>";
 echo estTableauPair($tab);
?>

<?php
$content = ob_get_clean();
$titre = "exercice 3";
require "../template.php";
?>