<?php

$heure = readline("heure");
$minute = readline("minute");

$minute = $minute + 1;
if ($minute == 60){
    $minute = 0;
    $heure = $heure + 1;
    if ($heure >= 24){
        $heure = $heure - 24;
    }
}

if ($minute > 60){
    $minute = $minute - 60;
    $heure = $heure + 1;
    if ($heure >= 24){
        $heure = $heure - 24;
    }
}
echo $heure . "h". $minute

?>