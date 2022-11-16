<?php

$nb = readline ("Convertir euro : ");
$echange = 0;
$devise = array ("Angleterre" => 0.88, "USA" => 1.04, "Canada" => 1.38, "Japon" => 145.05, "Mexique" => 20.12, "Maroc" => 11.16, "Inde" => 84.4);

foreach ($devise as $key => $value){
    $echange = $nb * $value;
    echo $key . " : " . $echange . "\n";
}

?>