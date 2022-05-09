<?php

// Data input - prompt the user to enter the names of two teams and the goals each team scored
echo "Enter the name of the first team: ";
$sTeam1 = trim (fgets (STDIN));
echo "Enter the name of the second team: ";
$sTeam2 = trim (fgets (STDIN));
echo "Enter the number of goals the first team scored: ";
$iGoals1 = trim (fgets (STDIN));
echo "Enter the number of goals the second team scored: ";
$iGoals2 = trim (fgets (STDIN));

// Data processing and Results output
if($iGoals1 > $iGoals2) {
    echo "Team " . $sTeam1 . " win.\n";
}
elseif($iGoals2 > $iGoals1) {
    echo "Team " . $sTeam2 . " win.\n";
}
else {
    echo "It's a tie!\n";
}
