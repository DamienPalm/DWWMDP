<?php

$tab = [5,2,3,4,1,9,8];

while ($tab [$start] < $tab[$end]){
    for ($i = 0; $i < $tab; $i++){
        $temp = $tab[$start];
        $tab[$start] = $tab[$end];
        $tab[$end] = $temp;
        $start++;
        $end--;
    }
}
echo $tab;

?>