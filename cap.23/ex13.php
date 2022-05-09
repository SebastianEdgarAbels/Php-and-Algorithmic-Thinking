<?php

// Data input - prompt the user to enter the name and the ages of three persons
echo "Enter the name of the first person and his age: ";
$p1 = trim (fgets (STDIN));
$age1 = trim (fgets (STDIN));
echo "Enter the name of the second person and his age: ";
$p2 = trim (fgets (STDIN));
$age2 = trim (fgets (STDIN));
echo "Enter the name of the thirs person and his age: ";
$p3 = trim (fgets (STDIN));
$age3 = trim (fgets (STDIN));

// Data processing and Results output
$min = $age1;
$minName = $p1;
$max = $age2;
$maxName = $p2;

if($min > $age2){
    $min = $age2;
    $minName = $p2;
}
if($min > $age3) {
    $min = $age3;
    $minName = $p3;
}
if($max < $age1) {
    $max = $age1;
    $maxName = $p1;
}
if($max < $age3) {
    $max = $age3;
    $maxName = $p3;
}
echo $minName . " is younger.\n";
echo $maxName . " is older.\n";
?>