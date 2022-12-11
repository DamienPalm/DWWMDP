<?php ob_start() ?>

<?php
require "../fonction.php";

$humain1 = ["Nom" => "Marie", "Âge" => 32, "Sexe" => "femme"];
$humain2 = ["Nom" => "Pierre", "Âge" => 32, "Sexe" => "homme"];
$humain3 = ["Nom" => "Riri", "Âge" => 28, "Sexe" => "homme"];
$humain4 = ["Nom" => "Fifi", "Âge" => 28, "Sexe" => "femme"];

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo affichage($humain1);
echo "--------------------" . "<br>";
echo affichage($humain2);
echo "--------------------" . "<br>";
echo affichage($humain3);
echo "--------------------" . "<br>";
echo affichage($humain4);
echo "</p>";

?>

<?php
$content = ob_get_clean();
$titre = "exercice 2 : Tableau de tableau associatif";
require "../../template.php";
?>