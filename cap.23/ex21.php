<?php
######################
### BMI Calculator ###
######################
// Data input - prompt the user to enter his age
echo "Enter your age: ";
$age = trim (fgets (STDIN));

// Data processing and Results output
// Data Validation Process
if($age < 18) {
    echo "Invalid age!\n";
}
else {
    // Asking if the user is going to enter kg and meter or pounds and feets
    echo "Please select your type of measurement: \n";
    echo "1. Kilograms and meters\n";
    echo "2. Pounds and feet\n";
    $iMeasurement = trim (fgets (STDIN));

    // Data Validation Process
    if($iMeasurement < 1 || $iMeasurement > 2) {
        echo "Invalid choise!\n";
    }
    else{
        if($iMeasurement == 1) {
            // Data input - prompt the user to enter his weight in kilograms
            echo "Enter your weight in kg: ";
            $iWeightInKg = trim (fgets (STDIN));
           
            // Data Validation Process
            if($iWeightInKg < 0) {
                echo "Invalid kilograms - you entered a negative value\n";
            }
            else{
                // Data input - prompt the user to enter his height in centimeters
                echo "Enter your height in centimeters: ";
                $iHeightInCm = trim (fgets (STDIN));
                if($iHeightInCm < 0) {
                    echo "Invalid height - you entered a negative value\n";
                }
                else {
                    // Kilogram to pounds
                    $iConversionKg2Pounds = $iWeightInKg * 2.205;
                    // Centimeters to inches
                    $iConversionCm2Inches = $iHeightInCm / 2.54;
                    $iBMI = ($iConversionKg2Pounds * 703) / $iConversionCm2Inches ** 2;
                    // sprintf("%.2f", $iBMI);
                    if($iBMI < 15) {
                        echo "Very severely underweight\n";
                    }
                    elseif($iBMI < 16) {
                        echo "S everely underweight\n";
                    }
                    elseif($iBMI < 18.5) {
                        echo "Underweight\n";
                    }
                    elseif($iBMI < 25) {
                        echo "Normal\n";
                    }
                    elseif($iBMI < 30) {
                        echo "Overweight\n";
                    }
                    elseif($iBMI < 35) {
                        echo "Severely overweight\n";
                    }
                    else {
                        echo "Very severely overweight\n";
                    }
                }   
            }
        }
        else {
            // if the second choised is selected 
            // Data input - prompt the user to enter his weight in pounds
            echo "Enter your weight in pounds: ";
            $iWeightInPounds = trim (fgets (STDIN));
            if($iWeightInPounds < 0) {
                echo "Invalid weight!\n";
            }
            else {
                // Data input - prompt the user to enter his height in inches
                echo "Enter your height in inches: ";
                $iHeightInInches = trim (fgets (STDIN));
                if($iHeightInInches < 0) {
                    echo "Invalid height!\n";
                }
                else {
                    $iBMI = ($iWeightInPounds * 703) / $iHeightInInches ** 2;
                    if($iBMI < 15) {
                        echo "Very severely underweight\n";
                    }
                    elseif($iBMI < 16) {
                        echo "S everely underweight\n";
                    }
                    elseif($iBMI < 18.5) {
                        echo "Underweight\n";
                    }
                    elseif($iBMI < 25) {
                        echo "Normal\n";
                    }
                    elseif($iBMI < 30) {
                        echo "Overweight\n";
                    }
                    elseif($iBMI < 35) {
                        echo "Severely overweight\n";
                    }
                    else {
                        echo "Very severely overweight\n";
                    }
                }
            }
        }
    }
}
?>