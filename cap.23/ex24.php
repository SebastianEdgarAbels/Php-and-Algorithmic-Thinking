<?php

// Data input - prompt the user to enter the wind speed
echo "Enter the wind speed: ";
$iWind = trim (fgets (STDIN));

// Data processing and Results output
// Data Validation Process
if($iWind < 0) {
    echo "Error: you entered a negative value!\n";
}
else {
    if($iWind < 1) {
        $iBNr = 0;
        echo "The corresponding Beaufort number is 0.\n";
        echo "Description: Calm\n";
    }
    elseif($iWind < 4) {
        $iBNr = 1;
        echo "The corresponding Beaufort number is 1.\n";
        echo "Description: Light air\n";
    }
    elseif($iWind < 8) {
        $iBNr = 2;
        echo "The corresponding Beaufort number is 2.\n";
        echo "Description: Light breeze\n";
    }
    elseif($iWind < 13) {
        $iBNr = 3;
        echo "The corresponding Beaufort number is 3.\n";
        echo "Description: Gentle breeze\n";
    }
    elseif($iWind < 18) {
        $iBNr = 4;
        echo "The corresponding Beaufort number is 4.\n";
        echo "Description: Moderate breeze\n";
    }
    elseif($iWind < 25) {
        $iBNr = 5;
        echo "The corresponding Beaufort number is 5.\n";
        echo "Description: Fresh breeze\n";
    }
    elseif($iWind < 31) {
        $iBNr = 6;
        echo "The corresponding Beaufort number is 6.\n";
        echo "Description: Strong breeze\n";
    }
    elseif($iWind < 39) {
        $iBNr = 7;
        echo "The corresponding Beaufort number is 7.\n";
        echo "Description: Moderate gale\n";
    }
    elseif($iWind < 47) {
        $iBNr = 8;
        echo "The corresponding Beaufort number is 8.\n";
        echo "Description: Gale\n";
    }
    elseif($iWind < 55) {
        $iBNr = 9;
        echo "The corresponding Beaufort number is 9.\n";
        echo "Description: Strong gale\n";
    }
    elseif($iWind < 64) {
        $iBNr = 10;
        echo "The corresponding Beaufort number is 10.\n";
        echo "Description: Storm\n";
    }
    elseif($iWind < 74) {
        $iBNr = 11;
        echo "The corresponding Beaufort number is 11.\n";
        echo "Description: Violent storm\n";
    }
    else {
        $iBNr = 12;
        echo "The corresponding Beaufort number is 12.\n";
        echo "Description: Hurricane force\n"; 
    }
    if($iBNr <= 3) {
        echo "It's Fishing Day!\n";
    }
    // hier i could also write if($iWind <= 13) {...code}
}
?>