<?php ob_start() ?>

Ici page d'accueil

<?php
$content = ob_get_clean();
$titre = "Bibliotheque MGA";
require "template.php";