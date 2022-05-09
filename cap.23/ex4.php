<?php

// Data input - prompt the user to enter an integer
echo "Enter an integer: ";
$iNr = trim (fgets (STDIN));

// Data Processing and Results Output
if($iNr < 0) {
    echo "Invalid numer\n";
}
elseif($iNr != (int )($iNr)) {
    echo "Error! You entered a float\n";
}
else {
    if($iNr % 2 == 0) {
        echo "Even\n";
    }
    else {
        echo "Odd\n";
    }
}

?>