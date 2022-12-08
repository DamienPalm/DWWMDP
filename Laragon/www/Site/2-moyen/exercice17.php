<?php ob_start() ?>



<?php
$content = ob_get_clean();
$titre = "Exercice Commande";
require "../template.php";
?>