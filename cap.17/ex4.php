<?php

// Data input - prompt the user to enter two teams and the goals that each team scored
echo "Enter the name for the first team: ";
$sTeam1 = trim (fgets (STDIN)); 
echo "Enter the name of the second team: ";
$sTeam2 = trim (fgets (STDIN));

echo "Enter the goals that team 1 scored: ";
$iGoalsTeam1 = trim (fgets (STDIN));
echo "Enter the goals that team 2 scored: ";
$iGoalsTeam2 = trim (fgets (STDIN));

// Data processing 

// Normally here I have to make with else if in case of draw or 0 0
if ($iGoalsTeam1 > $iGoalsTeam2) {
    echo "Team " . $sTeam1 . " won!\n";
}
else {
    echo "Team " . $sTeam2 . " won!\n";
}

?>