<?php ob_start()?>

<?php
require "fonction.php";

$humain1 = ["nom" => "Marie", "âge" => 32, "sexe" => "femme"];
$humain2 = ["nom" => "Pierre", "âge" => 32, "sexe" => "homme"];
$humain3 = ["nom" => "Riri", "âge" => 28, "sexe" => "homme"];
$humain4 = ["nom" => "Fifi", "âge" => 28, "sexe" => "femme"];

echo affichage($humain1);
echo "--------------------" . "<br>";
echo affichage($humain2);
echo "--------------------" . "<br>";
echo affichage($humain3);
echo "--------------------" . "<br>";
echo affichage($humain4);

?>

<?php
$content = ob_get_clean();
$titre = "exercice 2 : Tableau de tableau associatif";
require "../template.php";
?>