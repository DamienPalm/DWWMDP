<?php ob_start()?>



<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php"
?>