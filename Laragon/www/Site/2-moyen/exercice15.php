<?php ob_start()?>


<?php
require "Armes.php";
require "Player.php";

$player1 = new Player("Riri", 5, 100, 1);
$player2 = new Player("Fifi", 5, 100, 2);
$arme1 = new Armes("Hache", 10);
$arme2 = new Armes("Epée", 8);

$recupPlayer = [$player1, $player2];
$recupArmes = [$arme1, $arme2];

foreach ($recupArmes as $value){
    $value->presentation();
}

?>


<?php
$content = ob_get_clean();
$titre = "Exercice Static Maison";
require "../template.php";
?>