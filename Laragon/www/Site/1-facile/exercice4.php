<?php ob_start()?>

<form action="" method="post">
    <p>Nombre : <input type="number" name="nb" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<?php

$nb= $_POST['nb'];

if($nb%2==0){
    echo $nb . " est pair";
}
else{
    echo $nb . " est impair";
}

?>

<?php
$content = ob_get_clean();
$titre="Exercice4";
require "../template.php"
?>