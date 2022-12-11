<?php ob_start() ?>

<?php
require "../fonction.php";

$humain1 = ["Nom" => "Marie", "Âge" => 32, "Sexe" => "femme"];
$humain2 = ["Nom" => "Fifi", "Âge" => 32, "Sexe" => "homme"];

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo affichage($humain1);
echo "--------------------" . "<br>";
echo affichage($humain2);
echo "</p>";

?>

<?php
$content = ob_get_clean();
$titre = "exercice 1 : Tableau associatif";
require "../../template.php";
?>