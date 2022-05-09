<?php

// Data processing
// Create a random word consisting of five letters
$sAlpha = "abcdefghijklmnoprstquvwxyz";
$sRandWord = strtoupper($sAlpha[rand(0, strlen($sAlpha) - 1)]) . 
             $sAlpha[rand(0, strlen($sAlpha) -1)] . 
             $sAlpha[rand(0, strlen($sAlpha) -1)] .
             $sAlpha[rand(0, strlen($sAlpha) -1)] .
             $sAlpha[rand(0, strlen($sAlpha) -1)];

echo $sRandWord, "\n";


?>