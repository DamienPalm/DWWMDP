<?php ob_start() ?>


<?php
require "Armes.php";
require "Player.php";

$arme1 = new Armes("Hache", 10);
$arme2 = new Armes("Epée", 8);

$player1 = new Player();
$player1->setNom("Riri");
$player1->setIdArme($arme1->getId());
echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo $player1;
echo"-------------------------------" . "<br>";

$player2 = new Player();
$player2->setNom("Fifi");
$player2->setIdArme($arme2->getId());
echo $player2;
 

?>


<?php
$content = ob_get_clean();
$titre = "Exercice Static Maison";
require "../../template.php";
?>