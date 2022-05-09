<?php

// Data input - prompt the user to enter a six word letters
echo "Enter a six word letters: ";
$sWord = trim (fgets (STDIN));


$sente_is_okey = true;
// Data processing and Results output
if($sWord != strtoupper($sWord[0] && $sWord[2] && $sWord[4])) {
    $sente_is_okey = false;
}
elseif($sWord != strtoupper($sWord[1] && $sWord[3] && $sWord[5])) {
    $sente_is_okey = false;
}
else {
    $sente_is_okey = true;
}
echo $sente_is_okey, "\n";
?>