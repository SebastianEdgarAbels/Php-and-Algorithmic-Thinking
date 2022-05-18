<?php

// Cap 26. 26.5.12

// “...write the corresponding PHP script that
//  lets a teacher enter the total number of students as well as 
//  their grades and then calculates and displays the average value 
//  of those who got an “A”, that is 90 to 100. Add all necessary 
//  checks to make the script satisfy the property of definiteness.

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

// Data input - enter the total number of students
echo "Enter the total number of stundents: ";
$iStudents = trim (fgets (STDIN));

$iSum = 0;
$counter = 0;

// Data processing
for ($i=1; $i<=$iStudents; $i++) {
    // Data input - enter the grades
    echo "Enter the Grade for Stunde nr.: " . $i, "\n";
    $iGrade = trim (fgets (STDIN));

    if($iGrade >= 90 && $iGrade <= 100) {
        $iSum += $iGrade;
        $counter ++;
    }
}


if($counter > 0) {
    // Results output - display the result on user's display
    echo "The average value of those who got an A is: " . $iSum/$counter, "\n";
}

?>