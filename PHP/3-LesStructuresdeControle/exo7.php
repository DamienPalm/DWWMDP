<?php

$heure = readline("heure");
$minute = readline("minute");
$seconde = readline("seconde");

$seconde = $seconde + 1;
if ($seconde == 60){
    $seconde = 0;
    $minute = $minute + 1;
    if ($minute > 60){
        $minute = $minute - 60;
    }
}

if ($heure >= 24){
    $heure = $heure - 24;
}

if ($seconde > 60){
    $seconde = $seconde - 60;
    $minute = $minute + 1;
}

if ($minute == 60){
    $minute = 0;
    $heure = $heure + 1;
    if ($minute > 60){
        $minute = $minute - 60;
        $heure = $heure + 1;
    }
}



echo "Dans une seconde, il sera : " . $heure . "h". $minute . "m" . $seconde

?>