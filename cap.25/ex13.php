<?php

$iN = trim (fgets (STDIN));
$iSum = 0;
$i = 0;

while ($i < $iN) {
    $iX = trim (fgets (STDIN));
    $iSum = $iSum + $iX;
    $i++;
}
echo $iSum;

?>