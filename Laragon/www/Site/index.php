<?php ob_start()?>



<?php
$content = ob_get_clean();
$titre = "Mon super site d'exercice";
require "template.php";
?>