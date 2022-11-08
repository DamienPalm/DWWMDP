<?php

$note = [];
for ($i = 1 ; $i <= 9 ; $i++){
    $saisie = readline ("note : ");
    $note [$i] = $saisie;
}
echo ($moy = array_sum($note) / count($note));

?>