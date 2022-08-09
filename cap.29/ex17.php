<?php

$i = 1;
$S = 0;
$P = 1;
$a = 0;

while (true) {
    if($i < 45) {
        $S +=  $a;
    }
    else {
        $P *= $a;
    }
    $i ++;
    if($i >= 90) break;
    $a = trim (fgets (STDIN));
}

echo $S, $P;