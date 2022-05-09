<?php

// Data input - prompt the user to enter the total number of CDs that he purchased
echo "Enter the total number of CDs purchased: ";
$iCds = trim (fgets (STDIN));

// Data processing and Results output
switch ($iCds) {
    case 1:
        echo "3 Points awarded.\n";
        break;
    case 2:
        echo "10 Points awarded.\n";
        break;
    case 3:
        echo "20 Points awarded.\n";
        break;
    default:
        echo "45 Points awarded.\n";
        break;
}


?>