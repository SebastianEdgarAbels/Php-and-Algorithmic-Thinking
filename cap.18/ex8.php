<?php

// Data input - prompt the user to enter a month between 1 and 12
echo "Enter a month (1 - 12): ";
$iMonth = trim (fgets (STDIN));

// Data processing and Results output
if($iMonth == 12 || $iMonth == 1 || $iMonth == 2) {
    echo "Is winter.\n";
}
elseif($iMonth == 3 || $iMonth == 4 || $iMonth == 5) {
    echo "Is Spring.\n";
}
elseif($iMonth == 6 || $iMonth == 7 || $iMonth == 8) {
    echo "Is Summer.\n";
}
elseif($iMonth == 9 || $iMonth == 10 || $iMonth == 11) {
    echo "Is Fall/Autumn.\n";
}

?>