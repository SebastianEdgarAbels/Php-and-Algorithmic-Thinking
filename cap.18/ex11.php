<?php

// Data input - prompt the user to enter a letter between A and F
echo "Enter a letter between A and F: ";
$sLetter = trim (fgets (STDIN));

// Data processing and Results output
if($sLetter == "A") {
    echo "90 - 100\n";
}
elseif($sLetter == "B") {
    echo "80 - 89\n";
}
elseif($sLetter == "C") {
    echo "70 - 79\n";
}
elseif($sLetter == "D") {
    echo "60 - 69\n";
}
else {
    echo "0 - 59\n";
}


?>