<?php

// Data input - prompt the user to enter an integer
echo "Enter an integer: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
if($iNr < 0 || $iNr != (int)($iNr)) {
    echo "Invalid number\n";
}
elseif ($iNr % 3 == 0 && $iNr % 4 == 0) {
    echo "NN is exactly divisible by 3 and 4\n";
}
else {
    echo "NN is not what you are looking for\n";
}
?>