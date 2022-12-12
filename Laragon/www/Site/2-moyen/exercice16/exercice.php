<?php ob_start() ?>

<?php

require "Employe.php";
require "Cadre.php";

$employe1 = new Employe("Jean", "Neymar", "1850389546458", 1500.56, "soudeur");
$employe2 = new Employe("Simon", "Jeremy", "179028955812", 1700.47, "assistant mécanicien");
$employe3 = new Employe("Odile", "Deray", "285097154678", 1900.14, "magasinière");
$listeEmploye = [$employe1, $employe2, $employe3];

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
foreach ($listeEmploye as $employe) {
    echo $employe->__toString();
    echo "-------------------------------------------------" . "<br>";
    echo $employe->effectueSonJob();
    echo "-------------------------------------------------" . "<br>";
}

$cadre1 = new Cadre("Alain", "Deloin", "1840259453666", 2100.23, "chef mécanicien", $listeEmploye);
$listeCadre = [$cadre1];

foreach ($listeCadre as $cadre) {
    echo $cadre->__toString();
    echo "-------------------------------------------------" . "<br>";
}
echo "</p>";
echo "</div>";
echo "</div>" . "<br>";

echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>";
echo $cadre1->augmenteUnSalarie($employe1, 10) . "<br>";
echo "---------------------------------------------------" . "<br>";
echo $cadre1->augmenteUnSalarie($employe3, 20) . "<br>";
echo $cadre1->manage($employe1, $employe3);
echo "</p>";
echo "</div>";
echo "</div>";


?>


<?php
$content = ob_get_clean();
$titre = "Exercice Heritage";
require "../../template.php";
?>