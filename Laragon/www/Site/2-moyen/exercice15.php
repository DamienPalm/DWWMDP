<?php ob_start()?>


<?php
require "Armes.php";
require "Player.php";

$arme1 = new Armes("Hache", 10);
$arme2 = new Armes("Epée", 8);
$player1 = new Player("Riri", 5, 100, $arme1->getId());
$player2 = new Player("Fifi", 5, 100, $arme2->getId());

$recupPlayer = [$player1, $player2];
$recupArmes = [$arme1, $arme2];


foreach ($recupPlayer as $value){
    $value->presentationPlayer();
}
foreach ($recupArmes as $value){
    $value->presentationArme();
}

?>


<?php
$content = ob_get_clean();
$titre = "Exercice Static Maison";
require "../template.php";
?>