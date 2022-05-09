<?php

$count = 0;
$iN = trim (fgets (STDIN));
$iP = 1;
$i = 0;

while ($i < $iN) {
    $iX = trim (fgets (STDIN));
    
    if($iX % 2 == 0) {
        $iP = $iP * $iX;
        $count++;
    }
    $i++;
}
if($count > 0){
    echo $iP . "\n";
}
else {
    echo "You entered no even integers\n";
}

?>