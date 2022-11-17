<?php

$nouvelEssai = "o";

echo "                   ********************" . "\n" . "                   CALCUL SUR LE CERCLE" . "\n" . "                   ********************" . "\n" . "" . "\n";

while ($nouvelEssai == "o"){
    $rayon = readline ("Quel est le rayon du cercle : ");
    $circonference = 2 * pi() * $rayon;
    $surface = pi() * $rayon * $rayon . "\n";
    echo "Sa circonférence es de : " . $circonference . "\n" . "Sa surface est : " . $surface . "\n";
    $nouvelEssai = readline ("Voulez-vous faire un autre calcul (O/N) : ");
    $nouvelEssai == "N";
}
if ($nouvelEssai == "N"){
    echo "Au revoir et à bientôt";
}



?>