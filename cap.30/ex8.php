<?php

// Cap. 30.8-8
//“The area of a circle can be calculated using the following formula:
// Area = π ∙ Radius 2
// Write a PHP script that prompts the user to enter the length of the radius of a circle and then calculates and displays
// its area. The script must iterate as many times as the user wishes. At the end of each area calculation, the script
// must ask the user if he or she wishes to calculate the area of another circle. If the answer is “yes” the script must
// repeat; it must end otherwise. Make your script accept the “answer in all possible forms such as “yes”, “YES”, “Yes”, or even “YeS”
//
// “Moreover, using a loop control structure, the script must validate data input and display an error message when the
// user enters any non-positive value for Radius .
// Hint: Use the pi() function to get the value of π.””
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

do {
    echo "Enter the length of a radius \n";
    $radius = trim (fgets (STDIN));
    while($radius <= 0) {
        echo "You entered a negative value for the radius \n";
        echo "Enter the length of a radius \n";
        $radius = trim (fgets (STDIN));
    }
    $area = pi() * $radius ** 2;
    echo "The area is: ", $area, "\n";
    echo "Do you wish to calculate the area of another circle? \n";
    $answer = strtolower(trim (fgets (STDIN)));
} while ($answer == "yes");