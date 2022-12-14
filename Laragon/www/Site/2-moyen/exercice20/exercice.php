<?php ob_start() ?>

<?php
require "chainePlus.php";

$chaine = new ChainePlus("Programmation orientée objet en PHP");










?>

<?php
$content = ob_get_clean();
$titre = "Exercice Recap : POO";
require "../../template.php";
?>