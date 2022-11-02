<?php

$A = 1;
$B = 2;
$C = 3;
$D = 0;
$D = $B;
$B = $A;
$A = $C;
$C = $D;

echo "La variable A vaut :" . $A . "\n";
echo "La variable B vaut :" . $B . "\n";
echo "La variable C vaut :" . $C;

?>