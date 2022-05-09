<?php

// Data input - prompt the user to enter the Beaufort number
echo "Enter the Beaufort number: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
switch ($iNr) {
    case 0:
        echo "Calm\n";
        break;
    case 1:
        echo "Light air\n";
        break;
    case 2:
        echo "Light breeze\n";
        break;
    case 3:
        echo "Gentle breeze\n";
        break;
    case 4: 
        echo "Moderate breeze\n";
        break;
    case 5:
        echo "Fresh breeze\n";
        break;
    case 6:
        echo "Strong breeze\n";
        break;
    case 7:
        echo "Moderate gale\n";
        break;
    case 8:
        echo "Gale\n";
        break;
    case 9:
        echo "Strong gale\n";
        break;
    case 10:
        echo "Storm\n";
        break;
    case 11:
        echo "Violent storm\n";
        break;
    case 12:
        echo "Hurricane force\n";
        break;
    default:
        echo "Invalid number!\n";
        break;
}

?>