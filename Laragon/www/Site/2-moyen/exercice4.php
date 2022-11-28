<?php ob_start()?>


<form action="" method="get">
    <input type="button" value="Animaux" name="Animaux"/>
    <input type="button" value="Chien" name="Chien"/>
    <input type="button" value="Chat" name="Chat"/>
</form>

<?php
require "fonction.php";

$tab1 = ['Nom' => "Myla", 'Âge' => 6, 'Type' => "Chien"];
$tab2 = ['Nom' => "Sparrow", 'Âge'=> 7, 'Type' => "Chat"];
$tab3 = ['Nom' => "Hina", 'Âge' => 8, 'Type' => "Chat"];

$tabAnimaux =[
    array('Nom' => "Myla", 'Âge' => 6, 'Type' => "Chien"),
    array('Nom' => "Sparrow", 'Âge'=> 7, 'Type' => "Chat"),
    array('Nom' => "Hina", 'Âge' => 8, 'Type' => "Chat")
];

echo affichage($tab1) . "<br>";
echo affichage($tab2) . "<br>";
echo affichage($tab3) . "<br>";
?>

<?php
$content = ob_get_clean();
$titre = "exercice 4 : Chien et chat";
require "../template.php";
?>