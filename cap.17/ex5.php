<?php

// Data input - prompt the user to enter a non negative number
echo "Enter a non negative number, bigger then 0: ";
$iNN = trim (fgets (STDIN));

// Data processing + Results output
if($iNN % 6 == 0) {
    echo "The given number is a multiple of 6.\n";
}
else {
    echo "The NN is not a multiple of 6.\n";
}

?>