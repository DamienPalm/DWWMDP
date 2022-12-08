<?php ob_start() ?>

<?php
require "fonction.php";

$humain1 = ["nom" => "Marie", "âge" => 32, "sexe" => "femme"];
$humain2 = ["nom" => "Fifi", "âge" => 32, "sexe" => "homme"];

echo affichage($humain1);
echo "--------------------" . "<br>";
echo affichage($humain2);

?>

<?php
$content = ob_get_clean();
$titre = "exercice 1 : Tableau associatif";
require "../template.php";
?>