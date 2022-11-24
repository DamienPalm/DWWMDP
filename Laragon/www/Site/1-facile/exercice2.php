<?php ob_start()?>

<?php
require "fonction.php";

$nb1= 5;
$nb2= 122;

echo pair ($nb1) . "<br>";
echo pair ($nb2);

?>

<?php
$content = ob_get_clean();
$titre= "Exercice2";
require "../template.php"
?>