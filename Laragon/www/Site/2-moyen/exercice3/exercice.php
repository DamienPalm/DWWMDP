<?php ob_start() ?>

<?php
require "../fonction.php";

$tab = [1, 2, 3];

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo afficherTableau($tab) . "<br>";
echo " " . "<br>";
echo "La moyenne du tableau est de ";
echo calculerMoyenne($tab) . "<br>";
echo " " . "<br>";
echo estTableauPair($tab);
echo "</p>";
?>

<?php
$content = ob_get_clean();
$titre = "exercice 3";
require "../../template.php";
?>