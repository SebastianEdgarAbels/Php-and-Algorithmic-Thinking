<?php

// Data input - prompt the user to enter a number between -9999 and 9999
echo "Enter a four digit number (-9999, 9999): ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
// if($iNr >= -9999 && $iNr <= - 1000 || $iNr >= 1000 && $iNr <= 9999) {
//     echo "4.\n";
// }
// elseif($iNr >= -999 && $iNr <= - 100 || $iNr >= 100 && $iNr <= 999) {
//     echo "3.\n";
// } 
// elseif($iNr >= -99 && $iNr <= - 10 || $iNr >= 10 && $iNr <= 99) {
//     echo "2.\n";
// }
// else {
//     echo "1.\n";
// }

if($iNr >= -9 && $iNr <= - 0 || $iNr >= 0 && $iNr <= 9) {
    echo "1.\n";
}
elseif($iNr >= -99 && $iNr <= - 10 || $iNr >= 10 && $iNr <= 99) {
    echo "2.\n";
} 
elseif($iNr >= -999 && $iNr <= - 100 || $iNr >= 100 && $iNr <= 999) {
    echo "3.\n";
}
elseif($iNr >= -9999 && $iNr <= -1000 || $iNr >= 1000 && $iNr <= 9999) {
    echo "4.\n";
}

?>