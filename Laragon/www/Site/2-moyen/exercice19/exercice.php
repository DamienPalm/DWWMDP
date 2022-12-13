<?php ob_start()?>








<?php
$content = ob_get_clean();
$titre = "Exercice Recap";
require "../../template.php";
?>