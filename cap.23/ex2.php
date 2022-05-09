<?php

// Data input - prompt the user to enter an integer
echo "Enter an integer: ";
$iNr = trim (fgets (STDIN));

// Data Processing and Results output
if($iNr < 0) {
    echo "Error! The number you enter has to be positive!\n";
}
else {
    if($iNr % 10 == 5) {
        echo "Last digit is equal to 5\n";
    }
    else {
        echo "Nothing special\n";
    }
}

?>