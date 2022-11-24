<?php ob_start()?>

<form action="" method="get">
    <p>Pseudo : <input type="string" name="pseudo" /></p>
    <p>Âge : <input type="number" name="âge" /></p>
    <p><input type="submit" value="Valider"></p>
</form>

<?php

$pseudo = $_GET['pseudo'];
$age = $_GET['âge'];

echo "Votre pseudo est : " . $pseudo . " et vous avez " . $age . "ans";

?>

<?php
$content = ob_get_clean();
$titre= "Exercice3";
require "../template.php"
?>