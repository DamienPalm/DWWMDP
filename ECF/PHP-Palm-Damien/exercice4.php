<?php

$tableauPeriodique = array ("H" => "Hydrogène", "He" => "Hélium", "P" => "Phosphore", "V" => "Vanadium", 
"Pb" => "Plomb", "I" => "Iode", "Kr" => "Krypton", "X" => "Xénon", "Rn" => "Radon", "Zr" => "Zirconium");

echo "     ******Tableau périodique des éléments chimiques******" . "\n" . "" . "\n";

foreach ($tableauPeriodique as $key => $value){
    echo $key . " : " . $value . "\n";
}

echo "" . "\n" . "*******************************" . "\n" . "Tableau trié :" . "\n";

ksort ($tableauPeriodique);

foreach ($tableauPeriodique as $key => $value){
    echo $key . " : " . $value . "\n";
}

?>